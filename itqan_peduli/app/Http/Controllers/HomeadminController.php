<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeadminController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel `campaign`
        $programCount = DB::table('campaigns')->count();

        // Menghitung statistik donatur
        $donaturToday = DB::table('transaksi_zakat')
            ->whereDate('created_at', now()->toDateString())
            ->distinct('id')
            ->count('id');

        $donaturThisMonth = DB::table('transaksi_zakat')
            ->whereMonth('created_at', now()->month)
            ->distinct('id')
            ->count('id');

        // Menghitung statistik transaksi
        $transaksiToday = DB::table('transaksi_zakat')
            ->whereDate('created_at', now()->toDateString())
            ->count();

        $transaksiThisMonth = DB::table('transaksi_zakat')
            ->whereMonth('created_at', now()->month)
            ->count();

        $danaToday = DB::table('transaksi_zakat')
            ->whereDate('created_at', now()->toDateString())
            ->sum('nominal_total');

        $danaThisMonth = DB::table('transaksi_zakat')
            ->whereMonth('created_at', now()->month)
            ->sum('nominal_total');

        $donasiMenungguPembayaran = DB::table('transaksi_zakat')
            ->where('status', 'Menunggu')
            ->count();

        $danaMenungguPembayaran = DB::table('transaksi_zakat')
            ->where('status', 'Menunggu')
            ->sum('nominal_total');

        $donasiOffline = DB::table('transaksi_zakat')
            ->where('metode_pembayaran', 'Offline')
            ->count();

        $donasiOnline = DB::table('transaksi_zakat')
            ->where('metode_pembayaran', 'Online')
            ->count();

        // Mengambil transaksi terbaru
        $donasiTerbaru = DB::table('transaksi_zakat')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('admin.konten.dashboard.index', compact(
            'programCount',
            'donaturToday',
            'donaturThisMonth',
            'transaksiToday',
            'transaksiThisMonth',
            'danaToday',
            'danaThisMonth',
            'donasiMenungguPembayaran',
            'danaMenungguPembayaran',
            'donasiOffline',
            'donasiOnline',
            'donasiTerbaru'
        ));
    }
}
