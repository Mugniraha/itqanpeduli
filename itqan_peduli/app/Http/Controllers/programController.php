<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;

class programController extends Controller
{
    public function index() {
        $categories = Kategori::orderBy('urutan')->get();
        $campaigns = Campaign::orderBy('urutan')->get();
        return view('front.konten.program-user.program', compact('categories', 'campaigns' ));
    }
}
