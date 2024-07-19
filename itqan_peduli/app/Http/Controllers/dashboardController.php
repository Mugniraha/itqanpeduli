<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'dashboard';
        $banners = Banner::all();
        $categories = Kategori::orderBy('urutan')->get();
        $campaigns_mendesak = Campaign::orderBy('urutan')->get();
        $campaigns_terpopuler = Campaign::take(3)->get();
        $campaigns_rekomendasi = Campaign::orderBy('urutan')->get();
        $campaigns_kategori = Campaign::take(3)->get();
        return view('front.konten.beranda.home', compact('slug', 'banners', 'categories', 'campaigns_mendesak', 'campaigns_terpopuler', 'campaigns_rekomendasi', 'campaigns_kategori' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
