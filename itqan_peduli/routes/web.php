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

Route::get('publikasi-archive', function (){
    return view('admin.konten.publikasi_program.archive');
});

Route::get('/pengaturan-kategori', function () {
    return view('admin.konten.pengaturanProgram.urutkanKategori');
});

Route::get('/pengaturan-program', function () {
    return view('admin.konten.pengaturanProgram.urutkanProgram');
});

Route::get('/kategori', function () {
    return view('admin.konten.pengaturanProgram.kategori');
});

Route::get('/data-bank', function () {
    return view('admin.konten.dataBank.dataBank');
});
Route::get('/inputTambahBank', function () {
    return view('admin.konten.dataBank.inputTambahBank');
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
Route::get('fundraiserUser',[pengaturan_userController::class, 'showFundraiser'])->name('fundraiser');
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
Route::get('/harga-emas', 'App\Http\Controllers\hitungZakatController@getHargaEmas');

Route::get('/danaTerkummpul', function (){
    return view('admin.konten.danaTerkumpul.index');
});

Route::get('/inputdonasiManual', function () {
    return view('admin.konten.transaksi.inputTransaksiOffline');
});

Route::get('/penyaluran', function () {
    return view('admin.konten.penyaluranDana.penyaluran');
});

Route::get('/lembaga', function () {
    return view('admin.konten.penyaluranDana.lembaga');
});

Route::get('/mediaberbagi', function () {
    return view('admin.konten.penyaluranDana.mediaberbagi');
});

Route::get('/berita', function () {
    return view('admin.konten.penyaluranDana.berita');
});

Route::get('/fundraiser', function () {
    return view('admin.konten.fundraiser.fundraiser');
});

Route::get('/leaderboard', function () {
    return view('admin.konten.fundraiser.leaderboard');
});

Route::get('/tranfun', function () {
    return view('admin.konten.fundraiser.transaksi');
});

Route::get('/slider', function () {
    return view('admin.konten.webUtama.slider');
});

Route::get('/partner', function () {
    return view('admin.konten.webUtama.partner');
});

Route::get('/katblog', function () {
    return view('admin.konten.webUtama.katblog');
});

Route::get('/blog', function () {
    return view('admin.konten.webUtama.blog');
});

Route::get('/kegiatan', function () {
    return view('admin.konten.webUtama.kegiatan');
});

Route::get('/konten', function () {
    return view('admin.konten.webUtama.konten');
});

//Front
Route::get('/', function () {
    return view('front.konten.beranda.home');
});
Route::get('/donasi-instan', function () {
    return view('front.konten.donasiInstan.donasiInstan');
});
Route::get('/intruksi-pembayaran', function () {
    return view('front.konten.donasiInstan.intruksiPembayaran');
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
Route::get('/rincian-pembayaran', function () {
    return view('front.konten.pembayaranZakat.rincianPembayaran');
});
Route::get('/panduan-pembayaran', function () {
    return view('front.konten.pembayaranZakat.panduanPembayaran');
});


Route::get('/inputTambahUser', function () {
    return view('admin.konten.user.inputTambahUser');
});

Route::get('/email', function () {
    return view('admin.konten.email.mail');
});

Route::get('/notifikasiEmail', function () {
    return view('admin.konten.email.notif');
});

Route::get('/inputNotifikasi', function () {
    return view('admin.konten.email.inputNotifikasi');
});

Route::get('/googleAnalytics', function () {
    return view('admin.konten.analytics.googleAnalytics');
});
Route::get('/facebookPixel', function () {
    return view('admin.konten.analytics.facebookPixel');
});

Route::get('/paymentGateaway', function () {
    return view('admin.konten.payment.paymentGateaway');
});
Route::get('/paymentGateaway', function () {
    return view('admin.konten.payment.paymentGateaway');
});
Route::get('/pengaturanSistem', function () {
    return view('admin.konten.pengaturan.pengaturan');
});
Route::get('/pembayaran', function () {
    return view('admin.konten.pembayaran.pembayaran');
});
