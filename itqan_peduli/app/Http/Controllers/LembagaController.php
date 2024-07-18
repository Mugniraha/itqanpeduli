<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembaga; // Model yang sesuai dengan tabel yang akan digunakan

class LembagaController extends Controller
{

    public function index()
    {
        $lembagas = Lembaga::all();
        return view('admin.konten.penyaluranDana.lembaga', compact('lembagas'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'program' => 'required|string',
            'nominal' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        // Simpan data ke database
        $lembaga = Lembaga::create([
            'program' => $request->program,
            'nominal' => $request->nominal,
            'catatan' => $request->catatan,
        ]);

        // Log data yang tersimpan untuk debugging

        // Redirect kembali ke halaman lembaga dengan pesan sukses
        return redirect('/lembaga')->with('success', 'Data berhasil disimpan');
    }



    public function edit($id)
    {
        $lembaga = Lembaga::findOrFail($id);
        return view('admin.konten.penyaluranDana.editLembaga', compact('lembaga'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'program' => 'required|string',
            'nominal' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        // Temukan data yang akan diupdate
        $lembaga = Lembaga::findOrFail($id);

        // Update data di database
        $lembaga->update([
            'program' => $request->program,
            'nominal' => $request->nominal,
            'catatan' => $request->catatan,
        ]);

        // Redirect kembali ke halaman lembaga dengan pesan sukses
        return redirect('/lembaga')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        // Temukan data yang akan dihapus
        $lembaga = Lembaga::findOrFail($id);

        // Hapus data dari database
        $lembaga->delete();

        // Redirect kembali ke halaman lembaga dengan pesan sukses
        return redirect('/lembaga')->with('success', 'Data berhasil dihapus');
    }
}
