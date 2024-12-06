<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

class DonasiInstanController extends Controller
{
    public function view($id_transaksi) {
        $transaction = Transaksi::where('id_transaksi', $id_transaksi)->first();
        return view('front.konten.donasiInstan.intruksiPembayaran', compact('transaction'));
    }

    public function create() {
        return view('front.konten.donasiInstan.donasiInstan');
    }
    public function store(Request $request) {
        $merchantCode = 'DS19725'; // dari duitku
        $apiKey = '6c1c52c8d64762c1d6621ff104cf71ec'; // dari duitku

        $TNominal = $request->nominal;
        $TNominalPengembang = $request->dana_pengembang;
        $Total = $TNominal + $TNominalPengembang;

        $paymentAmount = $Total;
        $paymentMethod = $request->metode_pembayaran; // VC = Credit Card
        $merchantOrderId = time() . ''; // dari merchant, unik
        $productDetails = 'Donasi Instan';
        $email = $request->email; // email pelanggan anda
        $phoneNumber = $request->nohp; // nomor telepon pelanggan anda (opsional)
        $customerVaName = $request->name; // tampilan nama pada tampilan konfirmasi bank
        $callbackUrl = 'https://db3d-36-79-44-102.ngrok-free.app/callback'; // url untuk callback
        $returnUrl = 'https://db3d-36-79-44-102.ngrok-free.app/return'; // url untuk redirect
        $expiryPeriod = 60; // atur waktu kadaluarsa dalam hitungan menit
        $signature = md5($merchantCode . $merchantOrderId . $paymentAmount . $apiKey);

        $customerDetail = array(
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->nohp
        );

        $itemDetails = $productDetails;

        /*Khusus untuk metode pembayaran OL dan SL
        $accountLink = array (
            'credentialCode' => '7cXXXXX-XXXX-XXXX-9XXX-944XXXXXXX8',
            'ovo' => array (
                'paymentDetails' => array (
                    0 => array (
                        'paymentType' => 'CASH',
                        'amount' => 40000,
                    ),
                ),
            ),
            'shopee' => array (
                'useCoin' => false,
                'promoId' => '',
            ),
        );*/

        /*Khusus untuk metode pembayaran Kartu Kredit
        $creditCardDetail = array (
            'acquirer' => '014',
            'binWhitelist' => array (
                '014',
                '400000'
            )
        );*/

        $params = array(
            'merchantCode' => $merchantCode,
            'paymentAmount' => $paymentAmount,
            'paymentMethod' => $paymentMethod,
            'merchantOrderId' => $merchantOrderId,
            'productDetails' => $productDetails,
            'customerVaName' => $customerVaName,
            'email' => $email,
            'phoneNumber' => $phoneNumber,
            //'accountLink' => $accountLink,
            //'creditCardDetail' => $creditCardDetail,
            'itemDetails' => $itemDetails,
            'customerDetail' => $customerDetail,
            'callbackUrl' => $callbackUrl,
            'returnUrl' => $returnUrl,
            'signature' => $signature,
            'expiryPeriod' => $expiryPeriod
        );

        $duitkuConfig = new \Duitku\Config($apiKey, $merchantCode);
        // false for production mode
        // true for sandbox mode
        $duitkuConfig->setSandboxMode(true);
        // set sanitizer (default : true)
        $duitkuConfig->setSanitizedMode(false);
        // set log parameter (default : true)
        $duitkuConfig->setDuitkuLogs(false);

        $params_string = json_encode($params);
        //echo $params_string;
        $url = 'https://sandbox.duitku.com/webapi/api/merchant/v2/inquiry'; // Sandbox
        // $url = 'https://passport.duitku.com/webapi/api/merchant/v2/inquiry'; // Production
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params_string))
        );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        //execute post
        $request2 = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);



        if($httpCode == 200)
        {
            $result = json_decode($request2, true);
            $transaction = new Transaksi();
            $transaction->nama_donatur = $request->name ?? null;
            $transaction->nomor_hp = $request->nohp ?? null;
            $transaction->nama_program = $productDetails ?? null;
            $transaction->tgl_transaksi = time() ?? null;
            $transaction->metode_pembayaran = $request->metode_pembayaran ?? null;
            $transaction->nominal = $request->nominal ?? null;
            $transaction->nominal_pengembangan_dakwah = $request->dana_pengembang ?? null;

            $transaction->nominal_total = $Total ?? null;
            $transaction->status = 'Pending';
            $transaction->doa = $request->doa ?? null;
            $transaction->id_transaksi = $result['reference'] ?? null;
            $transaction->checkout_link = $result['paymentUrl'] ?? null;
            $transaction->transaction_token = $result['vaNumber'] ?? null;
            $transaction->order_id = $result['$merchantOrderId'] ?? null;
            $transaction->bukti_pembayaran = '' ?? null;

            // Simpan data ke model
            $transaction->save();

            if(isset($result['qrString'])){
                $writer = new PngWriter();
                // Create QR code
                $qrCode = QrCode::create($result['qrString'])
                    ->setEncoding(new Encoding('UTF-8'))
                    ->setErrorCorrectionLevel(ErrorCorrectionLevel::Low)
                    ->setSize(300)
                    ->setMargin(10)
                    ->setRoundBlockSizeMode(RoundBlockSizeMode::Margin)
                    ->setForegroundColor(new Color(0, 0, 0))
                    ->setBackgroundColor(new Color(255, 255, 255));

                // Create generic logo
                $logo = Logo::create(public_path('logo_itqan.png'))
                    ->setResizeToWidth(50)
                    ->setPunchoutBackground(true)
                ;

                // Create generic label
                $label = Label::create('Label')
                    ->setTextColor(new Color(255, 0, 0));

                $result = $writer->write($qrCode, $logo, $label);
                $dataUri = $result->getDataUri();

            return view('front.konten.donasiInstan.intruksiPembayaran', compact('transaction', 'dataUri'));
            } else {
                return view('front.konten.donasiInstan.intruksiPembayaran', compact('transaction'));
            }
        }
        else
        {
            $request = json_decode($request2);
            $error_message = "Server Error " . $httpCode ." ". $request->Message;
            echo $error_message;
        }
    }
    public function callback(Request $request) {
        // Log::info('Callback received: ', $request->all());

        $apiKey = '6c1c52c8d64762c1d6621ff104cf71ec'; // API key anda
        $merchantCode = $request->input('merchantCode');
        $amount = $request->input('amount');
        $merchantOrderId = $request->input('merchantOrderId');
        $signature = $request->input('signature');
        $reference = $request->input('reference');

        // log data yang diterima
        // Log::info('Received data: merchantCode=' . $merchantCode . ', amount=' . $amount . ', merchantOrderId=' . $merchantOrderId . ', signature=' . $signature . ', reference=' . $reference);

        // validasi data yang diterima
        if (!$merchantCode || !$amount || !$merchantOrderId || !$signature || !$reference) {
            // Log::error('Missing parameters in callback data');
            return response()->json(['status' => 'Failed', 'message' => 'Bad Parameter'], 400);
        }

        // hitung ulang signature
        $params = $merchantCode . $amount . $merchantOrderId . $apiKey;
        $calcSignature = md5($params);

        if ($signature !== $calcSignature) {
            // Log::error('Invalid signature: calculated=' . $calcSignature . ', received=' . $signature);
            return response()->json(['status' => 'Failed', 'message' => 'Bad Signature'], 400);
        }

        // update transaksi
        $transaction = Transaksi::where('id_transaksi', $reference)->first();
        if ($transaction) {
            $transaction->status = 'Sukses';
            $transaction->save();
            // Log::info('Transaction updated: reference=' . $reference);
        } else {
            // Log::error('Transaction not found: reference=' . $reference);
            return response()->json(['status' => 'Failed', 'message' => 'Transaction not found'], 404);
        }

        return response()->json(['status' => 'OK'], 200);
    }
    public function return() {
        return view('front.konten.beranda.home');
    }

    public function cekTransaksi() {
        $merchantCode = 'DS19725'; // dari duitku
        $apiKey = '6c1c52c8d64762c1d6621ff104cf71ec'; // dari duitku
        $merchantOrderId = '1721723303'; // dari anda (merchant), bersifat unik

        $signature = md5($merchantCode . $merchantOrderId . $apiKey);

        $params = array(
            'merchantCode' => $merchantCode,
            'merchantOrderId' => $merchantOrderId,
            'signature' => $signature
        );

        $params_string = json_encode($params);
        $url = 'https://sandbox.duitku.com/webapi/api/merchant/transactionStatus';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params_string))
        );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        //execute post
        $request = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($httpCode == 200)
        {
            $results = json_decode($request, true);
            print_r($results, false);
            // echo "merchantOrderId :". $results['merchantOrderId'] . "<br />";
            // echo "reference :". $results['reference'] . "<br />";
            // echo "amount :". $results['amount'] . "<br />";
            // echo "fee :". $results['fee'] . "<br />";
            // echo "statusCode :". $results['statusCode'] . "<br />";
            // echo "statusMessage :". $results['statusMessage'] . "<br />";
        }
        else
        {
            $request = json_decode($request);
            $error_message = "Server Error " . $httpCode ." ". $request->Message;
            echo $error_message;
        }
    }
}
