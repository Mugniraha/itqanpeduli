<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\danaDonaturController;
use App\Http\Controllers\fundraiserController;
use App\Http\Controllers\pengaturan_userController;
use App\Http\Controllers\notifikasiWAController;
use App\Http\Controllers\mediaBerbagiController;
use App\Http\Controllers\penggunaanDataController;
use App\Http\Controllers\googleFontController;
use App\Http\Controllers\hitungZakatController;

Route::get('/dashboard', function () {
    return view('admin.layout.main');
});

Route::get('/publikasi-program', function () {
    return view('admin.konten.publikasi_program.kategori');
});

Route::get('/pengaturan-kategori', function () {
    return view('admin.konten.pengaturanProgram.urutkanKategori');
});

Route::get('/pengaturan-program', function () {
    return view('admin.konten.pengaturanProgram.urutkanProgram');
});

Route::get('/data-bank', function () {
    return view('admin.konten.dataBank.dataBank');
});

Route::resource('dashboard',dashboardController::class);
Route::resource('transaksi',transaksiController::class);
Route::get('transaksiOnline',[transaksiController::class, 'showTransaksiOnline'])->name('transaksiOnline');
Route::get('transaksiOnlineManual',[transaksiController::class, 'showTransaksiOnlineManual'])->name('transaksiOnlineManual');
Route::get('transaksiOffline',[transaksiController::class, 'showTransaksiOffline'])->name('transaksiOffline');

Route::resource('semuaDonatur', danaDonaturController::class);
Route::get('donaturSukses',[danaDonaturController::class, 'showDonaturSukses'])->name('donaturSukses');
Route::get('donaturGagal',[danaDonaturController::class, 'showDonaturGagal'])->name('donaturGagal');

Route::resource('fundraiser',fundraiserController::class);
Route::get('leaderboard',[fundraiserController::class, 'showLeaderboard'])->name('leaderboard');
Route::get('fundraiserTransaksi',[fundraiserController::class, 'showTransaksi'])->name('fundraiserTransaksi');

Route::get('admin',[pengaturan_userController::class, 'showAdmin'])->name('admin');
Route::get('akunting',[pengaturan_userController::class, 'showAkunting'])->name('akunting');
Route::get('donatur',[pengaturan_userController::class, 'showDonatur'])->name('donatur');
Route::get('fundraiser',[pengaturan_userController::class, 'showFundraiser'])->name('fundraiser');
Route::get('gerai',[pengaturan_userController::class, 'showGerai'])->name('gerai');
Route::get('program',[pengaturan_userController::class, 'showProgram'])->name('program');

Route::resource('template', notifikasiWAController::class);
Route::get('connect',[notifikasiWAController::class, 'showConnectWa'])->name('connect');

Route::resource('mediaBerbagi',mediaBerbagiController::class);

Route::resource('penggunaanData',penggunaanDataController::class);

Route::resource('googleFont', googleFontController::class);

// Route::get('/hitungZakat', function (){
//     return view('front.konten.hitungZakat.index');
// });

Route::get('/zakat', [hitungZakatController::class, 'index']);
Route::post('/zakat/calculate', [hitungZakatController::class, 'calculate']);




//Front
Route::get('/', function () {
    return view('front.konten.beranda.home');
});
Route::get('/donasi-instan', function () {
    return view('front.konten.donasiInstan.donasiInstan');
});
Route::get('/campaign-mendesak', function () {
    return view('front.konten.campaign.campaignMendesak');
});
Route::get('/campaign-rekomendasi', function () {
    return view('front.konten.campaign.campaignRekomendasi');
});
Route::get('/campaign-populer', function () {
    return view('front.konten.campaign.campaignPopuler');
});
Route::get('/laporan-terkini', function () {
    return view('front.konten.laporan.laporanTerkini');
});
Route::get('/kabar-terbaru', function () {
    return view('front.konten.laporan.kabarTerbaru');
});
Route::get('/detail-kabar', function () {
    return view('front.konten.laporan.detailKabar');
});
