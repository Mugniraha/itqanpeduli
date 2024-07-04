<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\transaksiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard',dashboardController::class);
Route::resource('transaksi',transaksiController::class);
