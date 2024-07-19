<?php

use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\campaignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\danaDonaturController;
use App\Http\Controllers\fundraiserController;
use App\Http\Controllers\pengaturan_userController;
use App\Http\Controllers\notifikasiWAController;
use App\Http\Controllers\NotifikasiMailController;
use App\Http\Controllers\MailSettingController;
use App\Http\Controllers\mediaBerbagiController;
use App\Http\Controllers\MediaBerbagiSettingController;
use App\Http\Controllers\penggunaanDataController;
use App\Http\Controllers\googleFontController;
use App\Http\Controllers\hitungZakatController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\urutkanKategoriController;
use App\Http\Controllers\urutkanProgramController;
use App\Http\Controllers\PenyaluranController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\leaderboardController;
use App\Exports\LeaderboardExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\transaksiFundraiserController;
use App\Http\Controllers\dataBankController;


Route::get('/dashboard2', function () {
    return view('admin.layout.main');
});

// Route::get('/publikasi-program', function () {
//     return view('admin.konten.publikasi_program.kategori');
// });

Route::get('publikasi-archive', function () {
    return view('admin.konten.publikasi_program.archive');
});
Route::get('/inputpengalangandana', function () {
    return view('admin.konten.publikasi_program.pengalanganDana');
});
Route::get('/inputprogramqurban', function () {
    return view('admin.konten.publikasi_program.programQurban');
});
Route::get('/inputprogramwakaf', function () {
    return view('admin.konten.publikasi_program.programWakaf');
});
Route::get('/inputprogramzakat', function () {
    return view('admin.konten.publikasi_program.programZakat');
});

// Route::get('/pengaturan-kategori', function () {
//     return view('admin.konten.pengaturanProgram.urutkanKategori');
// });

// Route::get('/pengaturan-program', function () {
//     return view('admin.konten.pengaturanProgram.urutkanProgram');
// });

// Route::get('/kategori', function () {
//     return view('admin.konten.pengaturanProgram.kategori');
// });

// Route::get('/data-bank', function () {
//     return view('admin.konten.dataBank.dataBank');
// });


Route::get('/inputTambahBank', function () {
    return view('admin.konten.dataBank.inputTambahBank');
});
Route::resource('data-bank', dataBankController::class);
Route::resource('zakat',hitungZakatController::class);
Route::get('/inputKelolaKategori', function () {
    return view('admin.konten.pengaturanProgram.inputKategori');
});

Route::resource('dashboard', dashboardController::class);
Route::resource('transaksi', transaksiController::class);
Route::get('transaksiOnline', [transaksiController::class, 'showTransaksiOnline'])->name('transaksiOnline');
Route::get('transaksiOnlineManual', [transaksiController::class, 'showTransaksiOnlineManual'])->name('transaksiOnlineManual');
Route::get('transaksiOffline', [transaksiController::class, 'showTransaksiOffline'])->name('transaksiOffline');

Route::resource('semuaDonatur', danaDonaturController::class);
Route::get('donaturSukses', [danaDonaturController::class, 'showDonaturSukses'])->name('donaturSukses');
Route::get('donaturGagal', [danaDonaturController::class, 'showDonaturGagal'])->name('donaturGagal');

Route::resource('fundraiser', fundraiserController::class);
Route::get('leaderboard', [fundraiserController::class, 'showLeaderboard'])->name('leaderboard');
Route::get('fundraiserTransaksi', [fundraiserController::class, 'showTransaksi'])->name('fundraiserTransaksi');

Route::get('admin',[pengaturan_userController::class, 'showAdmin'])->name('admin');
Route::get('akunting',[pengaturan_userController::class, 'showAkunting'])->name('akunting');
Route::get('donatur',[pengaturan_userController::class, 'showDonatur'])->name('donatur');
Route::get('fundraiserUser',[pengaturan_userController::class, 'showFundraiser'])->name('fundraiser');
Route::get('gerai',[pengaturan_userController::class, 'showGerai'])->name('gerai');
Route::get('program',[pengaturan_userController::class, 'showProgram'])->name('program');


Route::resource('template', notifikasiWAController::class);
Route::get('connect', [notifikasiWAController::class, 'showConnectWa'])->name('connect');

// Route::resource('mediaBerbagi', mediaBerbagiController::class);

Route::resource('penggunaanData', penggunaanDataController::class);

Route::resource('googleFont', googleFontController::class);

// Route::get('/hitungZakat', function (){
//     return view('front.konten.hitungZakat.index');
// });

Route::resource('zakat',hitungZakatController::class);
Route::get('/zakat-tampilan', [hitungZakatController::class, 'index']);
Route::post('/zakat/calculate', [hitungZakatController::class, 'calculate']);
Route::get('/harga-emas', 'App\Http\Controllers\hitungZakatController@getHargaEmas');

Route::get('/get-bank-details/{bankName}',[hitungZakatController::class, 'getBankDetails'])->name('getBankDetails');

Route::get('/panduan-pembayaran/{id}', [hitungZakatController::class, 'showPanduanPembayaran']);

Route::post('/midtrans/transaction/{id}', [hitungZakatController::class, 'createmidtransTransaction'])->name('midtrans.transaction.create');

Route::post('/zakat/{id}/bayar-manual', [hitungZakatController::class, 'bayarManual'])->name('zakat.bayarManual');


Route::get('/danaTerkummpul', function () {
    return view('admin.konten.danaTerkumpul.index');
});
Route::get('/detail-dana', function () {
    return view('admin.konten.danaTerkumpul.detail');
});

Route::get('/inputdonasiManual', function () {
    return view('admin.konten.transaksi.inputTransaksiOffline');
});

Route::get('/penyaluran', [PenyaluranController::class, 'index'])->name('penyaluran.index');
Route::post('/penyaluran/store', [PenyaluranController::class, 'store'])->name('penyaluran.store');
Route::get('/penyaluran/{id}/edit', [PenyaluranController::class, 'edit'])->name('penyaluran.edit');
Route::put('/penyaluran/{id}', [PenyaluranController::class, 'update'])->name('penyaluran.update');
Route::delete('/penyaluran/{id}', [PenyaluranController::class, 'destroy'])->name('penyaluran.destroy');
Route::get('/inputPenyaluran', function () {
    return view('admin.konten.penyaluranDana.inputPenyaluran');
});



Route::get('/berita', [BeritaController::class, 'index']);
Route::post('/berita', [BeritaController::class, 'store']);
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('edit-berita');
Route::post('/berita/{id}', [BeritaController::class, 'update'])->name('update-berita');
Route::get('/berita/{id}/delete', [BeritaController::class, 'destroy'])->name('delete-berita');


Route::get('/lembaga', [LembagaController::class, 'index'])->name('index.lbg');
Route::post('/lembaga', [LembagaController::class, 'store'])->name('store.lbg');
Route::get('/lembaga/{id}/edit', [LembagaController::class, 'edit'])->name('edit.lbg');
Route::put('/lembaga/{id}', [LembagaController::class, 'update'])->name('update.lbg');
Route::delete('/lembaga/{id}', [LembagaController::class, 'destroy'])->name('delete.lbg');
Route::get('/inputlembaga', function () {
    return view('admin.konten.penyaluranDana.inputLembaga');
});



Route::get('/mediaBerbagi', [mediaBerbagiController::class, 'index'])->name('index.media');
Route::post('/media/store', [mediaBerbagiController::class, 'store'])->name('store.media');
Route::get('/media/edit/{id}', [mediaBerbagiController::class, 'edit'])->name('edit.media');
Route::post('/media/update/{id}', [mediaBerbagiController::class, 'update'])->name('update.media');
Route::delete('/media/destroy/{id}', [mediaBerbagiController::class, 'destroy'])->name('destroy.media');
Route::get('/inputmediaberbagi', function () {
    return view('admin.konten.penyaluranDana.inputmediaberbagi');
});


Route::get('/fundraisers', [fundraiserController::class, 'index'])->name('fundraisers.index');
Route::post('/fundraisers', [fundraiserController::class, 'store'])->name('fundraisers.store');
Route::put('/fundraisers/{fundraiser}', [fundraiserController::class, 'update'])->name('fundraisers.update');
Route::delete('/fundraisers/{fundraiser}', [fundraiserController::class, 'destroy'])->name('fundraisers.destroy');

// Additional routes for custom methods
Route::get('/leaderboard', [leaderboardController::class, 'index'])->name('leaderboard.index');
Route::get('/export-leaderboard', function () {
    return Excel::download(new LeaderboardExport, 'leaderboard.xlsx');
})->name('export.leaderboard');
Route::get('/tranfun', [transaksiFundraiserController::class, 'index'])->name('transaksifundraiser.index');
Route::get('/detail-transaksi', function () {
    return view('admin.konten.fundraiser.detail');
});



// Route::get('/berita', function () {
//     return view('admin.konten.penyaluranDana.berita');
// });
Route::get('/inputberita', function () {
    return view('admin.konten.penyaluranDana.inputberita');
});

// Route::get('/fundraiser', function () {
//     return view('admin.konten.fundraiser.fundraiser');
// });

// Route::get('/leaderboard', function () {
//     return view('admin.konten.fundraiser.leaderboard');
// });

// Route::get('/tranfun', function () {
//     return view('admin.konten.fundraiser.transaksi');
// });

// Route::get('/slider', function () {
//     return view('admin.konten.webUtama.slider');
// });
// Route::get('/inputslider', function () {
//     return view('admin.konten.webUtama.inputslider');
// });

Route::get('/partner', function () {
    return view('admin.konten.webUtama.partner');
});
Route::get('/inputpartner', function () {
    return view('admin.konten.webUtama.inputpartner');
});

// Route::get('/katblog', function () {
//     return view('admin.konten.webUtama.katblog');
// });
// Route::get('/inputkatblog', function () {
//     return view('admin.konten.webUtama.inputkatblog');
// });

// Route::get('/blog', function () {
//     return view('admin.konten.webUtama.blog');
// });
// Route::get('/inputblog', function () {
//     return view('admin.konten.webUtama.inputblog');
// });

Route::get('/kegiatan', function () {
    return view('admin.konten.webUtama.kegiatan');
});
Route::get('/inputkegiatan', function () {
    return view('admin.konten.webUtama.inputkegiatan');
});

Route::get('/konten', function () {
    return view('admin.konten.webUtama.konten');
});

Route::get('media-berbagi-setting', [MediaBerbagiSettingController::class, 'index'])->name('mediaberbagi-settings.index');
Route::post('media-berbagi-setting', [MediaBerbagiSettingController::class, 'store'])->name('mediaberbagi-settings.store');

//Front
//front home
// Route::get('/', function () {
//     return view('front.konten.beranda.home');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('front.konten.beranda.home');
});
Route::get('/donasi-saya', function () {
    return view('front.konten.donasi saya.index');
});
Route::get('/zakat-saya', function () {
    return view('front.konten.zakat saya.index');
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


//front akun
Route::get('/akun', function () {
    return view('front.konten.akun.main');
});
Route::get('/akun-fundraiser', function () {
    return view('front.konten.akun.akunfundraiser');
});
Route::get('/komisi', function () {
    return view('front.konten.akun.komisi');
});
Route::get('/ubah-profile', function () {
    return view('front.konten.akun.editProfil');
});




// Route::get('/', function () {
//     return view('admin.konten.penyaluranDana.dashboard');
// });

// Route::post('/penyaluran/store', [PenyaluranController::class, 'store'])->name('penyaluran.store');


// Route::get('/penyaluran', function () {
//     return view('admin.konten.penyaluranDana.penyaluran');
// });

// Route::get('/lembaga', function () {
//     return view('admin.konten.penyaluranDana.lembaga');
// });

// Route::get('/mediaberbagi', function () {
//     return view('admin.konten.penyaluranDana.mediaberbagi');
// });

// Route::get('/berita', function () {
//     return view('admin.konten.penyaluranDana.berita');
// });

// Route::get('/kategori', function () {
//     return view('admin.konten.penyaluranDana.kategori');
// });

// Route::get('/fundraiser', function () {
//     return view('admin.fundraiser.fundraiser');
// });

// Route::get('/leaderboard', function () {
//     return view('admin.fundraiser.leaderboard');
// });

// Route::get('/tranfun', function () {
//     return view('admin.fundraiser.transaksi');
// });

// Route::get('/slider', function () {
//     return view('admin.web utama.slider');
// });

// Route::get('/partner', function () {
//     return view('admin.web utama.partner');
// });

// Route::get('/katblog', function () {
//     return view('admin.web utama.katblog');
// });

// Route::get('/blog', function () {
//     return view('admin.web utama.blog');
// });

// Route::get('/kegiatan', function () {
//     return view('admin.web utama.kegiatan');
// });

// Route::get('/konten', function () {
//     return view('admin.web utama.konten');
// });

// Route::get('/notifmail', function () {
//     return view('admin.email.notif');
// });

// Route::get('/mail', function () {
//     return view('admin.email.mail');
// });

Route::get('/inputpenggalanganDana', function () {
    return view('admin.konten.penyaluranDana.publikasiProgram.pengalanganDana');
});
Route::get('/inputprogramZakat', function () {
    return view('admin.konten.penyaluranDana.publikasiProgram.programZakat');
});
Route::get('/inputprogramWakaf', function () {
    return view('admin.konten.penyaluranDana.publikasiProgram.programWakaf');
});
Route::get('/inputprogramQurban', function () {
    return view('admin.konten.penyaluranDana.publikasiProgram.programQurban');
});
Route::get('/inputkelolaKategori', function () {
    return view('admin.konten.penyaluranDana.pengaturanProgram.kelolaKategori');
});
Route::get('/inputdonasiManual', function () {
    return view('admin.konten.penyaluranDana.transaksi.donasiManual');
});
Route::get('/inputpenyaluranDana', function () {
    return view('admin.konten.penyaluranDana.penyaluranDana.penyaluranDana');
});
Route::get('/inputhakLembaga', function () {
    return view('admin.konten.penyaluranDana.penyaluranDana.hakLembaga');
});
Route::get('/inputhakMediaBerbagi', function () {
    return view('admin.konten.penyaluranDana.penyaluranDana.hakMediaBerbagi');
});
Route::get('/inputupdateLaporan', function () {
    return view('admin.konten.penyaluranDana.penyaluranDana.updateLaporan');
});
Route::get('/inputkelolaSlider', function () {
    return view('admin.konten.penyaluranDana.webUtama.kelolaSlider');
});
Route::get('/inputkelolaPartner', function () {
    return view('admin.konten.penyaluranDana.webUtama.kelolaPartner');
});
Route::get('/inputwebKelolaKategori', function () {
    return view('admin.konten.penyaluranDana.webUtama.kelolaKategori');
});
Route::get('/inputkelolaBlog', function () {
    return view('admin.konten.penyaluranDana.webUtama.kelolaBlog');
});
Route::get('/inputkelolaKegiatan', function () {
    return view('admin.konten.penyaluranDana.webUtama.kelolaKegiatan');
});
Route::get('/inputkelolaUser', function () {
    return view('admin.konten.penyaluranDana.pengaturan.kelolaUser');
});
Route::get('/inputtambahBank', function () {
    return view('admin.konten.penyaluranDana.pengaturan.tambahBank');
});
Route::get('/inputkelolaNotifikasi', function () {
    return view('admin.konten.penyaluranDana.pengaturan.kelolaNotifikasi');
});

// Route::get('/googleAnalytics', function() {
//     return view('admin.konten.penyaluranDana.analytics.googleAnalytics');
// });
// Route::get('/facebookPixel', function() {
//     return view('admin.konten.penyaluranDana.analytics.facebookPixel');
// });
// Route::get('/payment', function() {
//     return view('admin.konten.penyaluranDana.paymentGateaway');
// });
// Route::get('/pengaturanemas', function() {
//     return view('admin.konten.penyaluranDana.pengaturan');
// });

Route::get('/pembayaran', function() {
    return view('admin.konten.penyaluranDana.pembayaran');
});



// User
// Route::get('/home', function () {
//     return view('front.konten.beranda.home');
// });

// Route::get('/akun', function () {
//     return view('front.konten.akun.main');
// });

// Route::get('/duta-amal', function () {
//     return view('front.konten.akun.dutaAmal');
// });

Route::get('/duta-amal', [fundraiserController::class, 'getProvinsi']);
Route::get('/kabupaten-kota/{provinsiId}', [fundraiserController::class, 'getKabupatenKota']);

Route::get('/tim-fundraising', function () {
    return view('front.konten.akun.tim-fundraising');
});

Route::get('/riwayat-transaksi', function () {
    return view('front.konten.akun.riwayat-fundraising');
});

Route::get('/detail', function () {
    return view('front.konten.akun.detail-transaksi');
});

// Route::get('/data-bank', function () {
//     return view('front.konten.akun.data-bank');
// });

Route::get('/bg', function () {
    return view('front.konten.akun.background');
});

Route::get('/akun', function () {
    return view('front.konten.akun.main');
});

// Route::get('registrasi', function () {
//     return view('front.konten.login.registrasi');
// });
Route::get('lupapassword1', function () {
    return view('front.konten.login.lupapassword');
});
Route::get('verifikasi1', function () {
    return view('front.konten.login.verifikasi');
});
Route::get('reset1', function () {
    return view('front.konten.login.resetpassword');
});
Route::get('berhasil1', function () {
    return view('front.konten.login.berhasil');
});
Route::get('ubah-katasandi1', function () {
    return view('front.konten.login.gantiPassword');
});

Route::get('bantuan', function () {
    return view('front.konten.akun.bantuan');
});
Route::get('aboutus', function () {
    return view('front.konten.akun.tentangKami');
});
Route::get('syaratketentuan', function () {
    return view('front.konten.akun.syaratketentuan');
});
Route::get('editprofil', function () {
    return view('front.konten.akun.editProfil');
});
Route::get('pengaturan', function () {
    return view('front.konten.akun.pengaturan');
});

Route::get('/program', function () {
    return view('front.konten.program.program');
});

Route::get('/artikel', function () {
    return view('front.konten.program.artikel');
});

Route::get('/donatur', function () {
    return view('front.konten.program.donatur');
});

Route::get('/yayasan', function () {
    return view('front.konten.program.yayasan');
});

Route::get('/duta', function () {
    return view('front.konten.program.dutaamal');
});
Route::get('/program-user', function () {
    return view('front.konten.program-user.program');
});
Route::get('/artikel', function () {
    return view('front.konten.artikel.artikel');
});
Route::get('/yayasan', function () {
    return view('front.konten.yayasan.yayasan');
});
Route::get('/donatur-user', function () {
    return view('front.konten.donatur.donatur');
});


Route::get('/inputTambahUser', function () {
    return view('admin.konten.user.inputTambahUser');
});


Route::get('/notifikasiEmail', [NotifikasiMailController::class, 'index'])->name('notifications.index');
Route::get('/inputNotifikasi', [NotifikasiMailController::class, 'create'])->name('notifications.create');
Route::post('/notifikasiEmail', [NotifikasiMailController::class, 'store'])->name('notifications.store');
Route::get('notifications/{id}', [NotifikasiMailController::class, 'show'])->name('notifications.show');

Route::get('email', [MailSettingController::class, 'index'])->name('mail-settings.index');
Route::post('email', [MailSettingController::class, 'store'])->name('mail-settings.store');




// Route::get('/email', function () {
//     return view('admin.konten.email.mail');
// });

// Route::get('/notifikasiEmail', function () {
//     return view('admin.konten.email.notif');
// });

// Route::get('/inputNotifikasi', function () {
//     return view('admin.konten.email.inputNotifikasi');
// });

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




//BE
//ADMIN
Route::resource('kategori', kategoriController::class);
Route::resource('urutkan-kategori', urutkanKategoriController::class);
Route::resource('urutkan-program', urutkanProgramController::class);
Route::post('/campaigns/update-order', [campaignController::class, 'urutkanProgram'])->name('campaigns.updateOrder');
Route::post('/categories/update-order', [kategoriController::class, 'updateOrder'])->name('categories.updateOrder');
Route::resource('campaign', campaignController::class);
Route::resource('banner', BannerController::class);
Route::resource('articleCategory', ArticleCategoryController::class);

Route::middleware('auth')->group(function () {
    Route::resource('article', ArticleController::class);
});

//BE
//USER
Route::resource('home', homeController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('/dashboard', homeController::class);
});

Route::get('/update-password', function() {
    return view('front.konten.proses.updatePassword');
});
ROute::get('/update-profile', function() {
    return view('front.konten.proses.updateProfile');
});
