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

Route::get('/', function () {
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
