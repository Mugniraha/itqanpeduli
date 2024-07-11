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
Route::get('/harga-emas', 'App\Http\Controllers\hitungZakatController@getHargaEmas');


//Front
//front home
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

//front akun
Route::get('/akun', function () {
    return view('front.konten.akun.main');
});
Route::get('/ubah-profile', function () {
    return view('front.konten.akun.editProfil');
});




Route::get('/', function () {
    return view('admin.isi.dashboard');
});

Route::get('/dana', function () {
    return view('admin.isi.dana');
});

Route::get('/penyaluran', function () {
    return view('admin.isi.penyaluran');
});

Route::get('/lembaga', function () {
    return view('admin.isi.lembaga');
});

Route::get('/mediaberbagi', function () {
    return view('admin.isi.mediaberbagi');
});

Route::get('/berita', function () {
    return view('admin.isi.berita');
});

Route::get('/kategori', function () {
    return view('admin.isi.kategori');
});

Route::get('/fundraiser', function () {
    return view('admin.fundraiser.fundraiser');
});

Route::get('/leaderboard', function () {
    return view('admin.fundraiser.leaderboard');
});

Route::get('/tranfun', function () {
    return view('admin.fundraiser.transaksi');
});

Route::get('/slider', function () {
    return view('admin.web utama.slider');
});

Route::get('/partner', function () {
    return view('admin.web utama.partner');
});

Route::get('/katblog', function () {
    return view('admin.web utama.katblog');
});

Route::get('/blog', function () {
    return view('admin.web utama.blog');
});

Route::get('/kegiatan', function () {
    return view('admin.web utama.kegiatan');
});

Route::get('/konten', function () {
    return view('admin.web utama.konten');
});

Route::get('/notifmail', function () {
    return view('admin.email.notif');
});

Route::get('/mail', function () {
    return view('admin.email.mail');
});

Route::get('/inputpenggalanganDana', function () {
    return view('admin.isi.publikasiProgram.pengalanganDana');
});
Route::get('/inputprogramZakat', function () {
    return view('admin.isi.publikasiProgram.programZakat');
});
Route::get('/inputprogramWakaf', function () {
    return view('admin.isi.publikasiProgram.programWakaf');
});
Route::get('/inputprogramQurban', function () {
    return view('admin.isi.publikasiProgram.programQurban');
});
Route::get('/inputkelolaKategori', function () {
    return view('admin.isi.pengaturanProgram.kelolaKategori');
});
Route::get('/inputdonasiManual', function () {
    return view('admin.isi.transaksi.donasiManual');
});
Route::get('/inputpenyaluranDana', function () {
    return view('admin.isi.penyaluranDana.penyaluranDana');
});
Route::get('/inputhakLembaga', function () {
    return view('admin.isi.penyaluranDana.hakLembaga');
});
Route::get('/inputhakMediaBerbagi', function () {
    return view('admin.isi.penyaluranDana.hakMediaBerbagi');
});
Route::get('/inputupdateLaporan', function () {
    return view('admin.isi.penyaluranDana.updateLaporan');
});
Route::get('/inputkelolaSlider', function () {
    return view('admin.isi.webUtama.kelolaSlider');
});
Route::get('/inputkelolaPartner', function () {
    return view('admin.isi.webUtama.kelolaPartner');
});
Route::get('/inputwebKelolaKategori', function () {
    return view('admin.isi.webUtama.kelolaKategori');
});
Route::get('/inputkelolaBlog', function () {
    return view('admin.isi.webUtama.kelolaBlog');
});
Route::get('/inputkelolaKegiatan', function () {
    return view('admin.isi.webUtama.kelolaKegiatan');
});
Route::get('/inputkelolaUser', function () {
    return view('admin.isi.pengaturan.kelolaUser');
});
Route::get('/inputtambahBank', function () {
    return view('admin.isi.pengaturan.tambahBank');
});
Route::get('/inputkelolaNotifikasi', function () {
    return view('admin.isi.pengaturan.kelolaNotifikasi');
});

Route::get('/googleAnalytics', function() {
    return view('admin.isi.analytics.googleAnalytics');
});
Route::get('/facebookPixel', function() {
    return view('admin.isi.analytics.facebookPixel');
});
Route::get('/payment', function() {
    return view('admin.isi.paymentGateaway');
});
Route::get('/pengaturanemas', function() {
    return view('admin.isi.pengaturan');
});

Route::get('/pembayaran', function() {
    return view('admin.isi.pembayaran');
});



// User
Route::get('/home', function () {
    return view('user.home.index');
});

// Route::get('/akun', function () {
//     return view('user.akun.main');
// });

Route::get('/dutaamal', function () {
    return view('user.akun.dutaAmal');
});

Route::get('/bg', function () {
    return view('user.akun.background');
});

Route::get('login', function () {
    return view('user.login.index');
});

Route::get('registrasi', function () {
    return view('user.login.registrasi');
});
Route::get('lupapassword', function () {
    return view('user.login.lupapassword');
});
Route::get('verifikasi', function () {
    return view('user.login.verifikasi');
});
Route::get('reset', function () {
    return view('user.login.resetpassword');
});
Route::get('berhasil', function () {
    return view('user.login.berhasil');
});

Route::get('bantuan', function () {
    return view('user.akun.bantuan');
});
Route::get('aboutus', function () {
    return view('user.akun.tentangKami');
});
Route::get('syaratketentuan', function () {
    return view('user.akun.syaratketentuan');
});
Route::get('editprofil', function () {
    return view('user.akun.editProfil');
});
Route::get('pengaturan', function () {
    return view('user.akun.pengaturan');
});

Route::get('/program', function () {
    return view('user.program.program');
});

Route::get('/artikel', function () {
    return view('user.program.artikel');
});

Route::get('/donatur', function () {
    return view('user.program.donatur');
});

Route::get('/yayasan', function () {
    return view('user.program.yayasan');
});

Route::get('/duta', function () {
    return view('user.program.dutaamal');
});
