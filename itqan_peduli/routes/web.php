<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.layout.main');
});
// Route::get('/publikasi-program', function () {
//     return view('admin.konten.publikasiProgram');
// });
