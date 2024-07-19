<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
Use illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class dataBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'data-bank';
        $data_banks = Bank::all();
        return view('admin.konten.dataBank.dataBank', compact('slug','data_banks'));
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
        $request->validate([
            'kode_bank' => 'required|string|max:255',
            'nama_bank' => 'required|string|max:255',
            'nama_pemilik_bank' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:255',
            'icon_bank' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data_banks = new Bank;
        if($request->hasFile('icon_bank')){
            $file = $request->file('icon_bank');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/icon_bank', $filename);
            $data_banks->icon_bank = $filename;
        }
        $data_banks->kode_bank = $request->kode_bank;
        $data_banks->nama_bank = $request->nama_bank;
        $data_banks->nama_pemilik_bank = $request->nama_pemilik_bank;
        $data_banks->nomor_rekening = $request->nomor_rekening;
        $data_banks->save();
        return redirect('/data-bank')->with('success', 'Berhasil Menambah Data Bank.');
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
        $slug = 'edit-bank';
        $data_banks = Bank::findOrFail($id);
        return view('admin.konten.dataBank.editBank', compact('slug','data_banks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_bank' => 'required|string|max:255',
            'nama_bank' => 'required|string|max:255',
            'nama_pemilik_bank' => 'required|string|max:255',
            'nomor_rekening' => 'required|string|max:255',
            'icon_bank' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data_banks = Bank::findOrFail($id);

        if ($request->hasFile('icon_bank')) {
            // Hapus file lama jika ada
            if ($data_banks->icon_bank) {
                Storage::delete('public/icon_bank/' . $data_banks->icon_bank);
            }

            $file = $request->file('icon_bank');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/icon_bank', $filename);
            $data_banks->icon_bank = $filename;
        }

        $data_banks->kode_bank = $request->kode_bank;
        $data_banks->nama_bank = $request->nama_bank;
        $data_banks->nama_pemilik_bank = $request->nama_pemilik_bank;
        $data_banks->nomor_rekening = $request->nomor_rekening;
        $data_banks->save();

        return redirect('/data-bank')->with('success', 'Data bank berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_banks = Bank::findOrFail($id);
        if($data_banks->icon_bank){
            Storage::delete('public/icon_bank' . $data_banks->icon_bank);
        }

        $data_banks->delete();

        return redirect('/data-bank')->with('success', 'Data bank berhasil dihapus.');
    }
}
