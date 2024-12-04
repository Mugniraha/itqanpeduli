<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('admin.konten.webUtama.kegiatan', compact('kegiatans'));
    }

    public function create()
    {
        return view('admin.konten.webUtama.inputkegiatan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'konten' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('kegiatan-fotos', 'public');
        }

        Kegiatan::create($validated);

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.konten.webUtama.editkegiatan', compact('kegiatan'));
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'konten' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('kegiatan-fotos', 'public');
        }

        $kegiatan->update($validated);

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil dihapus.');
    }
}

