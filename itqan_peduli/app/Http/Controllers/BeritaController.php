<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('admin.konten.penyaluranDana.berita', compact('berita'));
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'program' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        // Simpan data ke dalam database
        Berita::create([
            'program' => $request->program,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect('/berita')->with('success', 'Berita berhasil disimpan');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.konten.penyaluranDana.editBerita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'program' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update([
            'program' => $request->program,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/berita')->with('success', 'Berita berhasil diperbarui');
    }
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }


}
