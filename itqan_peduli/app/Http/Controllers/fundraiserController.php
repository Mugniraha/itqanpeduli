<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use App\Models\Zakat;
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
    $userId = Auth::id();

    $fundraisers = Fundraiser::where('id_user', $userId)->with('campaigns')->get();

    // Jika tidak ada fundraiser, redirect ke halaman daftar fundraiser
    if ($fundraisers->isEmpty()) {
        return redirect()->route('fundraiser.create')->with('message', 'Anda tidak memiliki fundraiser. Silakan tambahkan fundraiser baru.');
    }

    $fundraiserData = $fundraisers->map(function ($fundraiser) {
        $transaksi = Zakat::where('id', $fundraiser->id)->get();
        $totalTransaksiPending = $transaksi->where('status', 'pending')->count();
        $totalPengunjung = $transaksi->count();
        $totalDanaOnline = $transaksi->where('type', 'online')->sum('amount');
        $totalDanaOffline = $transaksi->where('type', 'offline')->sum('amount');

        // Hitung total komisi dari campaign yang terkait
        $totalKomisi = $fundraiser->campaigns->reduce(function ($carry, $campaign) {
            $percentage = $campaign->fundraiser_reward_percentage / 100; // Convert percentage to decimal
            $amount = $campaign->fund_amount;
            $carry += $percentage * $amount;
            return $carry;
        }, 0);

        return [
            'fundraiser' => $fundraiser,
            'totalTransaksiPending' => $totalTransaksiPending,
            'totalPengunjung' => $totalPengunjung,
            'transaksi' => $transaksi,
            'totalDanaOnline' => $totalDanaOnline,
            'totalDanaOffline' => $totalDanaOffline,
            'totalKomisi' => $totalKomisi,
            'saldoKomisi' => $totalKomisi, // Adjust this if needed
        ];
    });

    return view('front.konten.akun.akunfundraiser', compact('fundraiserData'));
}

public function akun2()
{
    // Retrieve all fundraisers from the database
    $fundraisers = Fundraiser::with('campaigns')->get();

    // If no fundraisers are found, handle this case
    if ($fundraisers->isEmpty()) {
        return redirect()->route('fundraiser.create')->with('message', 'Tidak ada fundraiser ditemukan.');
    }

    $fundraiserData = $fundraisers->map(function ($fundraiser) {
        $transaksi = Zakat::where('id', $fundraiser->id)->get();
        $totalTransaksiPending = $transaksi->where('status', 'pending')->count();
        $totalPengunjung = $transaksi->count();
        $totalDanaOnline = $transaksi->where('type', 'online')->sum('amount');
        $totalDanaOffline = $transaksi->where('type', 'offline')->sum('amount');

        // Hitung total komisi dari campaign yang terkait
        $totalKomisi = $fundraiser->campaigns->reduce(function ($carry, $campaign) {
            $percentage = $campaign->fundraiser_reward_percentage / 100; // Convert percentage to decimal
            $amount = $campaign->fund_amount;
            $carry += $percentage * $amount;
            return $carry;
        }, 0);

        return [
            'fundraiser' => $fundraiser,
            'totalTransaksiPending' => $totalTransaksiPending,
            'totalPengunjung' => $totalPengunjung,
            'transaksi' => $transaksi,
            'totalDanaOnline' => $totalDanaOnline,
            'totalDanaOffline' => $totalDanaOffline,
            'totalKomisi' => $totalKomisi,
            'saldoKomisi' => $totalKomisi,
        ];
    });

    // Calculate aggregate data
    $totalFundraisers = $fundraisers->count();
    $totalDonators = $fundraisers->sum(function ($fundraiser) {
        return Zakat::where('id', $fundraiser->id)->count();
    });

    return view('front.konten.akun.tim-fundraising', compact('fundraiserData', 'totalFundraisers', 'totalDonators'));
}



public function pengaturan()
{
    // Get the currently authenticated user's ID
    $userId = Auth::id();

    // Retrieve the fundraiser data for the authenticated user
    $fundraisers = Fundraiser::where('id_user', $userId)->first();

    // If no fundraiser is found, redirect or handle as needed
    if (!$fundraisers) {
        return redirect()->route('fundraiser.create')->with('message', 'Anda tidak memiliki fundraiser. Silakan tambahkan fundraiser baru.');
    }

    // Pass the fundraiser data to the view
    return view('front.konten.akun.pengaturanFundraiser', ['fundraiser' => $fundraisers]);
}




    public function create(){
        return view ('front.konten.akun.dutaAmal');
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



    public function getKabupatenKota($provinsiId)
    {
        // Endpoint API untuk mendapatkan kabupaten/kota berdasarkan provinsi
        $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$provinsiId}.json");

        // Mengembalikan response JSON
        return $response->json();
    }

    // Kode lainnya...
}
