<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.konten.webUtama.partner', compact('partners'));
    }

    public function create()
    {
        return view('admin.konten.webUtama.inputpartner');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('gambar')->store('partners', 'public');

        Partner::create([
            'gambar' => $path,
        ]);

        return redirect()->route('partner.index')->with('success', 'Partner berhasil ditambahkan!');
    }

    public function edit(Partner $partner)
    {
        return view('admin.konten.webUtama.editpartner', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($partner->gambar) {
                \Storage::disk('public')->delete($partner->gambar);
            }

            // Simpan gambar baru
            $path = $request->file('gambar')->store('partners', 'public');
            $partner->gambar = $path;
        }

        $partner->save();

        return redirect()->route('partner.index')->with('success', 'Partner berhasil diperbarui!');
    }


    public function destroy(Partner $partner)
    {
        if ($partner->gambar) {
            \Storage::disk('public')->delete($partner->gambar);
        }
        $partner->delete();

        return redirect()->route('partner.index')->with('success', 'Partner berhasil dihapus!');
    }
}
