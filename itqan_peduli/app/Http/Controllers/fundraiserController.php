<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class FundraiserController extends Controller
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
    public function akun()
    {
        // Mendapatkan ID user yang sedang login
        $userId = Auth::id();

        // Mengambil data fundraiser berdasarkan id_user
        $fundraisers = Fundraiser::where('id_user', $userId)->get(); // Menggunakan `get()` untuk mengambil koleksi

        // Mengirimkan data ke view
        return view('front.konten.akun.akunfundraiser', compact('fundraisers'));
    }



    

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tipe' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email',
            'provinsi' => 'required',
            'kabkota' => 'required',
            'password' => 'required|confirmed',
        ]);

        // Pastikan pengguna terautentikasi
        if (!auth()->check()) {
            return redirect()->back()->with('error', 'Anda harus login untuk melakukan ini.');
        }

        // Simpan data
        $fundraiser = new Fundraiser();
        $fundraiser->tipe = $request->input('tipe');
        $fundraiser->nama = $request->input('nama');
        $fundraiser->no_telepon = $request->input('no_telepon');
        $fundraiser->email = $request->input('email');
        $fundraiser->provinsi = $request->input('provinsi');
        $fundraiser->kabkota = $request->input('kabkota');
        $fundraiser->password = bcrypt($request->input('password'));
        $fundraiser->id_user = auth()->id(); // Mengatur id_user dengan ID pengguna yang terautentikasi

        $fundraiser->save();

        return redirect()->route('fundraisers.akun', ['id' => auth()->id()])
            ->with('success', 'Data berhasil disimpan. Anda sekarang dapat mengakses akun fundraiser Anda.');
    }


    /**
     * Show the form for creating a new resource.
     */
    // public function getProvinsi()
    // {
    //     $client = new Client();
    //     try {
    //         $response = $client->request('GET', 'https://api.binderbyte.com/wilayah/provinsi', [
    //             'query' => ['api_key' => '8e49f28e0f2f2cf56393c352613eec358e85fb7077ce6f7f453ebb826a7b1f6d']
    //         ]);

    //         if ($response->getStatusCode() === 200) {
    //             $provinsiList = json_decode($response->getBody(), true); // Mengonversi respons JSON menjadi array
    //             return view('front.konten.akun.dutaAmal', ['provinsiList' => $provinsiList]);
    //         } else {
    //             return response()->json(['error' => 'Failed to fetch provinces. HTTP status: ' . $response->getStatusCode()], 500);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Error: ' . $e->getMessage()], 500);
    //     }
    // }

    public function getKabupatenKota($provinsiId)
    {
        // Endpoint API untuk mendapatkan kabupaten/kota berdasarkan provinsi
        $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$provinsiId}.json");

        // Mengembalikan response JSON
        return $response->json();
    }

    // Kode lainnya...
}
