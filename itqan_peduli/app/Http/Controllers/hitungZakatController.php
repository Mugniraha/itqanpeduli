<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use GuzzleHttp\Client;
use Symfony\Component\HttpClient\HttpClient;
// use illuminate\Support\Facades\Http;
use Symfony\Component\HttpClient\Exception\RequestException;
use Illuminate\Support\Facades\Log;
// use GuzzleHttp\Exception\RequestException;
use App\Models\Zakat;
Use illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Bank;

class hitungZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.konten.hitungZakat.index');
    }



    public function getHargaEmas()
    {
        try {
            $client = HttpClient::create();
            $response = $client->request('GET', 'https://www.logammulia.com/id/harga-emas-hari-ini');

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                throw new \Exception('Failed to fetch data from logammulia.com');
            }

            $content = $response->getContent();
            $hargaEmas = $this->parseHargaEmas($content);

            if($hargaEmas === null){
                throw new \Exception('Failed to parse harga emas');
            }
            return response()->json(['harga_emas' => $hargaEmas]);
        } catch (\Exception $e) {
            Log::error('Error fetching harga emas:' .$e->getMessage());
            return response()->json(['error' => 'Failed to fetch data from logammulia.com' . $e->getMessage()], 500);
        }
    }

    private function parseHargaEmas($html)
    {
        preg_match('/<td>1 gr<\/td>\s*<td style="text-align:right;">([\d,]+)<\/td>/', $html, $matches);
        //preg_match('/<td style="text-align:right;">([\d,]+)<\/td>/', $html, $matches);


        if (isset($matches[1])) {
            $hargaEmasString = trim($matches[1]);
            $parsedValue = str_replace(['Rp', '.', ','],'', $hargaEmasString);
            $parsedValue = (float) $parsedValue;
            return $parsedValue;
        }

        return null;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
        // dd($request->all());
        $payment = new Zakat;
        $payment->id_user = Auth::id();
        $payment->metode_pembayaran = $request->metode_pembayaran;
        $payment->nominal_zakat = $request->nominal_zakat;
        $payment->nominal_pengembangan_dakwah = $request->nominal_pengembangan_dakwah;
        $payment->tgl_transaksi = now();
        $payment->nominal_total = $request->nominal_total;
        $payment->doa = $request->doa;
        $payment->nomor_hp =  $request->nomor_hp;
        $payment->status = 'pending';
        $payment->nama_donatur = $request->nama_donatur;
        $payment->nama_program_zakat = $request->nama_program_zakat;
        if (Str::startsWith($request->metode_pembayaran, 'Transfer')){
            $payment->order_id = Str::uuid();
        }
        $payment->save();
        return redirect()->to('/panduan-pembayaran/' . $payment->id);
    }

    public function getTransactionStatus($order_id)
    {
        $serverKey = env('MIDTRANS_SERVER_KEY');

        if (!$serverKey) {
            return ['error' => 'Server key not set in .env file'];
        }
        $base64ServerKey = base64_encode($serverKey . ':');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.midtrans.com/v2/$order_id/status");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $headers = [
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic ' . $base64ServerKey
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return ['error' => 'Curl Error:' . curl_error($ch)];
        }
        curl_close($ch);

        $response = json_decode($result, true);

        // Log response for debugging
        Log::info('Midtrans Response: ' . json_encode($response));

        return $response;
    }

    public function showTransactionStatus()
    {
        // Gantilah 'your-static-order-id' dengan ID transaksi yang Anda inginkan
        $staticOrderId = 'd36b79d8-3233-42ad-a0c8-bb2e7ea38bff';

        $response = $this->getTransactionStatus($staticOrderId);

        // Pastikan $response adalah array dengan data yang valid
        if (isset($response['error'])) {
            return view('error', ['message' => $response['error']]);
        }
        dd($response);

        return view('front.konten.zakat saya.transaction-status', ['response' => $response]);
    }

    public function handleMidtransNotification(Request $request)
    {

        if ($request->isMethod('post') && $this->validateCsrfToken($request)) {
            $notification = $request->all();

            // Log notifikasi untuk debugging
            Log::info('Midtrans Notification: ' . json_encode($notification));

            // Ambil order ID dari notifikasi
            $orderId = $notification['order_id'] ?? null;
            $transactionStatus = $notification['transaction_status'] ?? null;
            $paymentType = $notification['payment_type'] ?? null;
            $issuer = $notification['issuer']?? null;

            if ($orderId && $transactionStatus && $paymentType){
                $paymentMethod = null;

                switch ($paymentType){
                    case 'qris':
                        if (isset($notification['acquirer'])) {
                            switch ($notification['acquirer']) {
                                case 'airpay shopee':
                                    $paymentMethod = 'ShopeePay (via QRIS)';
                                    break;
                                case 'gopay':
                                    $paymentMethod = 'GoPay (via QRIS)';
                                    break;
                                default:
                                    $paymentMethod = 'QRIS';
                                    break;
                            }
                        } else {
                            $paymentMethod = 'QRIS';
                        }
                        break;
                    case 'shopeepay':
                        $paymentMethod = 'ShopeePay';
                        break;
                    case 'gopay':
                        $paymentMethod = 'GoPay';
                        break;
                    case 'bank_transfer' :
                        if (isset($notification['va_numbers']) && count($notification['va_numbers']) > 0) {
                            $bankName = $notification['va_numbers'][0]['bank'] ?? 'Lainya';
                            $paymentMethod = 'Transer Bank (' .strtoupper($bankName) . ')';
                        } else {
                            $paymentMethod = 'Transfer Bank (Lainya)';
                        }
                        break;
                    case 'echannel':
                        // Echannel digunakan untuk pembayaran menggunakan layanan seperti Mandiri Bill Payment
                        $paymentMethod = 'Mandiri E-Channel';
                        break;
                    default:
                    // Jika payment type tidak spesifik, cek issuer
                        switch ($issuer) {
                            case 'gopay':
                                $paymentMethod = 'GoPay';
                                break;
                            case 'shopeepay':
                                $paymentMethod = 'ShopeePay';
                                break;
                            case 'dana':
                                $paymentMethod = 'DANA';
                                break;
                            case 'ovo':
                                $paymentMethod = 'OVO';
                                break;
                            default:
                                $paymentMethod = 'Lainnya';
                                break;
                        }
                        break;
                }

                 // Cari pembayaran berdasarkan order ID
                    $payment = Zakat::where('order_id', $orderId)->first();
                    if ($payment) {
                        // Perbarui status dan metode pembayaran
                        $statusPembayaran = $transactionStatus === 'settlement' ? 'Success' : $transactionStatus;
                        if($transactionStatus === 'expire'){
                            $statusPembayaran = 'Expired';
                        }
                        $payment->status = $statusPembayaran;
                        $payment->metode_pembayaran = $paymentMethod;
                        $payment->save();
                    return response()->json(['status' => 'success']);
                    } else {
                        return response()->json(['status' => 'CSRF token mismatch'], 419);
                    }
            } else {
                return response()->json(['status' => 'invalid notification data'], 400);
            }
    }
}



    protected function validateCsrfToken(Request $request)
    {
        return true;
    }


    public function createMidtransTransaction(Request $request, $id)
    {
        // Ambil data zakat berdasarkan ID
        $payment = Zakat::findOrFail($id);
        $orderId = Str::uuid();
        // dd($payment->id);
        // Buat array parameter untuk dikirim ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id' =>  $orderId,
                'gross_amount' => $payment->nominal_total,
            ],
            'item_details' => [
                [
                    'price' => $payment->nominal_total,
                    'quantity' => 1,
                    'name' => $payment->nama_program_zakat,
                ]
            ],
            'customer_details' => [
                'first_name' => $payment->nama_donatur,
            ],
        ];

        // Autentikasi menggunakan server key sandbox
        $serverKey = env('MIDTRANS_SERVER_KEY');
        $auth = base64_encode($serverKey . ':');

        Log::info('Params: ' . json_encode($params)); // Log params for debugging

        $client = HttpClient::create();
        $response = $client->request('POST', 'https://app.sandbox.midtrans.com/snap/v1/transactions', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $auth,
            ],
            'json' => $params,
        ]);

        // Cek status kode dan respons
        $statusCode = $response->getStatusCode();
        $content = $response->getContent(false);

        Log::info('Status Code: ' . $statusCode);
        Log::info('Response: ' . $content);

        if ($statusCode === 401) {
            return response()->json(['error' => 'Unauthorized - Invalid API Key'], 401);
        }

        if ($statusCode === 500) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
        $responseContent = json_decode($content, true);
        // dd($responseContent);
        $payment->checkout_link = $responseContent['redirect_url'];
        $payment->transaction_token = $responseContent['token'];
        $payment->order_id = $orderId;
        // $payment->id_transaksi = $responseContent['transaction_id'];
        $payment->save();
        // Return response
        return response()->json([
            'status_code' => $statusCode,
            'transaction_token' => $responseContent['token'],
            'response' => json_decode($content, true),
        ]);
    }



    public function getBankDetails($bankName)
    {
        $bank = Bank::where('nama_bank', $bankName)->first();
        return response()->json([
            'nama_bank' => $bank->nama_bank,
            'nama_pemilik_bank' => $bank->nama_pemilik_bank,
            'nomor_rekening' => $bank->nomor_rekening,
            'icon_bank' => asset('storage/icon_bank/' . $bank->icon_bank)
        ]);
    }

    public function bayarManual(Request $request, $id)
    {

        $request->validate([
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $zakat = Zakat::findOrFail($id);

        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/bukti_pembayaran', $filename);
            $zakat->buktiPembayaran = $filename;
        }
        $zakat->save();

        return redirect('zakat')->with('success', 'Data bank berhasil diperbarui.');
    }

    public function zakatSaya()
    {
        $user = Auth::user();
        $zakatSaya = Zakat::where('id_user', $user->id)->get();
        return view('');
    }

    public function showZakatSaya(Request $request)
    {
        $user = Auth::user();
        $selectedMonth = $request->query('month');


        $zakat = Zakat::where('id_user', $user->id)
            ->orderBy('tgl_transaksi', 'desc')
            ->get();
        $groupedZakat = $zakat->groupBy(function($date){
            return Carbon::parse($date->tgl_transaksi)->format('F Y');
        });

        $month = $groupedZakat->keys()->sort()->values();

        return view('front.konten.zakat saya.index', compact('groupedZakat', 'month'));
    }

    public function paymentNow()
    {

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showPanduanPembayaran($id)
    {
        $payment = Zakat::findOrFail($id);
        return view('front.konten.pembayaranZakat.panduanPembayaran', compact('payment'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function create(Request $request)
    {
        $params = [
            'transaction_details' => [
                'order_id' => Str::uuid(),
                'gross_amount' => $request->nominal_total,
            ],

            'item_details' => [
                [
                    'price' => $request->nominal_total,
                    'quantity' => 1,
                    'name' => $request->nama_program_zakat,
                ]
            ],
            'customer_details' => [
                'first_name' => $request->nama_donatur,
            ],
            // 'enabled_payments' => [$request->metode_pembayaran]
        ];

        // Debugging: Print the parameters to check if they are correct
        Log::info('Params sent to Midtrans: ' . json_encode($params));

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $client = HttpClient::create();



        try {
            $response = $client->request('POST', 'https://app.sandbox.midtrans.com/snap/v1/transactions', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => "Basic $auth",
                ],
                'json' => $params,
            ]);

            $responseData = $response->toArray();

            // Debugging: Print the response from Midtrans
            Log::info('Response from Midtrans: ' . json_encode($responseData));

            $payment = new Zakat;
            $payment->id = $params['transaction_details']['order_id'];
            $payment->status = 'pending';
            $payment->nominal_total = $request->nominal_total;
            $payment->nama_donatur = "Mugni";
            $payment->nama_program_zakat = $request->nama_program_zakat;
            $payment->checkout_link = $responseData['redirect_url'];
            $payment->save();

            return response()->json(['token' => $responseData['token']]);

        } catch (\Exception $e) {
            // Debugging: Print the error message
            Log::error('Error: ' . $e->getMessage());

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
