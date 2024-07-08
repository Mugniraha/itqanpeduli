<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class danaDonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'semuaDonatur';
        return view('admin.konten.danaDonatur.semuaDonatur', compact('slug'));
    }

    public function showDonaturSukses()
    {
        $slug = 'donaturSukses';
        return view('admin.konten.danaDonatur.donaturSukses',compact('slug'));
    }

    public function showDonaturGagal()
    {
        $slug = 'donaturGagal';
        return view('admin.konten.danaDonatur.donaturGagal',compact('slug'));
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
