<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;

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
