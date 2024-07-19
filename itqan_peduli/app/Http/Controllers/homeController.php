<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index() {
        $banners = Banner::all();
        $categories = Kategori::orderBy('urutan')->get();
        $campaigns_mendesak = Campaign::orderBy('urutan')->get();
        $campaigns_terpopuler = Campaign::take(3)->get();
        $campaigns_rekomendasi = Campaign::orderBy('urutan')->get();
        $campaigns_kategori = Campaign::all();
        return view('front.konten.beranda.home', compact('banners', 'categories', 'campaigns_mendesak', 'campaigns_terpopuler', 'campaigns_rekomendasi', 'campaigns_kategori' ));
    }
}
