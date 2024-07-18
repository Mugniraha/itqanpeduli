<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use GuzzleHttp\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\Exception\RequestException;
use Illuminate\Support\Facades\Log;
// use GuzzleHttp\Exception\RequestException;
use App\Models\Zakat;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'metode_pembayaran' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $transaksiZakat = Zakat::create($validatedData);

        // Kembalikan respon sukses atau redirect
        return response()->json(['success' => 'Transaksi berhasil disimpan', 'data' => $transaksiZakat], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
