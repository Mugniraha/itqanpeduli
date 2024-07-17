<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media; // Model yang sesuai dengan tabel yang akan digunakan

class mediaBerbagiController extends Controller
{

    public function index()
    {
        $media = Media::all();
        return view('admin.konten.penyaluranDana.mediaberbagi', compact('media'));
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
        Media::create([
            'program' => $request->program,
            'nominal' => $request->nominal,
            'catatan' => $request->catatan,
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect('/mediaBerbagi')->with('success', 'Data berhasil disimpan');
    }



    public function edit($id)
    {
        $media = Media::find($id);
        return view('admin.konten.penyaluranDana.edit', compact('media'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'program' => 'required|string',
            'nominal' => 'required|numeric',
            'catatan' => 'nullable|string',
        ]);

        // Update data di database
        $media = Media::find($id);
        $media->update([
            'program' => $request->program,
            'nominal' => $request->nominal,
            'catatan' => $request->catatan,
        ]);

        // Redirect kembali ke halaman dengan pesan sukses
        return redirect('/mediaBerbagi')->with('success', 'Data berhasil diperbarui');
    }


    public function destroy($id)
    {
        Media::find($id)->delete();
        return redirect('/mediaBerbagi')->with('success', 'Data berhasil dihapus');
    }

}
