<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;

Route::get('/', function () {
    return view('admin.layout.main');
});

// Route::get('/publikasi-program', function () {
//     return view('admin.konten.publikasiProgram');
// });

Route::resource('dashboard',dashboardController::class);
Route::resource('transaksi',transaksiController::class);
