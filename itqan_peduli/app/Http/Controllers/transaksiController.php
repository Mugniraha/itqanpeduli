<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakat;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'transaksi';
        return view('admin.konten.transaksi.index', compact('slug'));
    }

    public function showTransaksiOnline()
    {
        $slug = 'transaksiOnline';
        return view('admin.konten.transaksi.transaksiOnline', compact('slug'));
    }

    public function showTransaksiOnlineManual()
    {
        $slug = 'transaksiOnlineManual';
        return view('admin.konten.transaksi.transaksiOnlineManual', compact('slug'));
    }

    public function showTransaksiOffline()
    {
        $slug = 'transaksiOffline';
        return view('admin.konten.transaksi.transaksiOffline', compact('slug'));
    }

    public function showAllTransaksi()
    {
        $transaksi = Zakat::all();
        return view('admin.konten.transaksi.index', compact('transaksi'));
    }

    public function showDetailTransaksi($id)
    {
        $transaksi = Zakat::findOrFail($id);
        return view('admin.konten.transaksi.detailTransaksi', compact('transaksi'));
    }

    public function editDetailTransaksi(Request $request)
    {
        $request->validate([
            'nominal_total' => 'required|string|max:255',
            'nama_donatur' => 'required|string|max:255',
        ]);
        // dd($request->id);
        $transaksi = Zakat::findOrFail($request->id);

        $transaksi->nominal_total = $request->nominal_total;
        $transaksi->nama_donatur = $request->nama_donatur;

        $transaksi->save();

        return redirect()->route('transaksi.showDetailTransaksi', ['id' => $transaksi->id])->with('success','Data berhasil diperbarui');
    }

    public function deleteDetailTransaksi(Request $request)
    {
        $transaksi = Zakat::findOrFail($request->id);
        $transaksi->delete();
        return redirect()->route('transaksi.showAllTransaksi')->with('success', 'Data bank berhasil dihapus.');
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
