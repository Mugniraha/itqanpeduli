<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class urutkanKategoriController extends Controller
{
    public function index() {
        $categories = Kategori::orderBy('urutan')->get();
        return view('admin.konten.pengaturanProgram.urutkanKategori', compact('categories'));
    }
}
