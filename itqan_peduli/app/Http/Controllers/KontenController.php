<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;

class KontenController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return view('admin.konten.webUtama.konten', compact('konten'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'content' => 'required',
        ]);
    
        // Cek apakah konten dengan type yang sama sudah ada
        $konten = Konten::where('type', $request->type)->first();
    
        if ($konten) {
            // Jika ada, perbarui konten yang sudah ada
            $konten->update(['content' => $request->content]);
        } else {
            // Jika tidak ada, buat konten baru
            Konten::create([
                'type' => $request->type,
                'content' => $request->content
            ]);
        }
    
        return redirect()->route('konten.index')->with('success', 'Konten berhasil disimpan!');
    }
    

    public function destroy($id)
    {
        $konten = Konten::findOrFail($id); // Mencari konten berdasarkan ID
        $konten->delete(); // Menghapus konten dari database

        return redirect()->route('konten.index')->with('success', 'Konten berhasil dihapus!');
    }

    public function tentangKami()
    {
        // Fetch content where type is 'tentang_kami'
        $konten = Konten::where('type', 'tentang_kami')->first();

        // Pass the content to the view
        return view('front.konten.akun.tentangKami', compact('konten'));
    }

    public function syaratKetentuan()
    {
        // Fetch content where type is 'syarat_ketentuan'
        $konten = Konten::where('type', 'syarat_ketentuan')->first();

        // Pass the content to the view
        return view('front.konten.akun.syaratketentuan', compact('konten'));
    }

}
