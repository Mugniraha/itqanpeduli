<?php

namespace App\Http\Controllers;
use \App\Models\Fundraiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpClient\HttpClient;


class fundraiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'fundraiser';
        $fundraisers = Fundraiser::paginate(10); // Adjust the number of items per page as needed
        return view('admin.konten.fundraiser.fundraiser', compact('slug', 'fundraisers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_duta' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'alamat_email' => 'required|string|email|max:255',
            'provinsi' => 'required|string|max:255',
            'kabkota' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $data = $request->only([
            'jenis_duta', 
            'nama_lengkap', 
            'no_wa', 
            'alamat_email', 
            'provinsi', 
            'kabkota', 
            'password'
        ]);

        // Encrypt the password before saving
        $data['password'] = bcrypt($data['password']);

        Fundraiser::create($data);

        return redirect()->route('akun-fundraiser')->with('success', 'Pendaftaran berhasil!');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function getProvinsi()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.binderbyte.com/wilayah/provinsi?api_key=8e49f28e0f2f2cf56393c352613eec358e85fb7077ce6f7f453ebb826a7b1f6d',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        if ($httpCode == 200) {
            $provinsiList = json_decode($response, true);
            return view('front.konten.akun.dutaAmal', ['provinsiList' => $provinsiList]);
        } else {
            return response()->json(['error' => 'HTTP status: ' . $httpCode . ', cURL error: ' . $error], 500);
        }
    }

    public function getKabupatenKota($provinsiId)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.binderbyte.com/wilayah/kabupaten?api_key=8e49f28e0f2f2cf56393c352613eec358e85fb7077ce6f7f453ebb826a7b1f6d&province_id=$provinsiId",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        if ($httpCode == 200) {
            $kabkotaList = json_decode($response, true);
            return response()->json($kabkotaList);
        } else {
            return response()->json(['error' => 'HTTP status: ' . $httpCode . ', cURL error: ' . $error], 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */

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
