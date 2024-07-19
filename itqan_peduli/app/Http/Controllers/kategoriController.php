<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;

class kategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::orderBy('urutan')->get();
        return view('admin.konten.pengaturanProgram.kategori', compact('categories'));
    }

    public function create()
    {
        return view('admin.konten.pengaturanProgram.inputKategori');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image',
            'photo' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Kategori::create($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori created successfully!');
    }

    public function edit($id)
    {
        $categories = Kategori::findOrFail($id);
        return view('admin.konten.pengaturanProgram.editKategori', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image',
            'photo' => 'nullable|image',
        ]);

        $Kategori = Kategori::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('icon')) {
            if ($Kategori->icon) {
                Storage::disk('public')->delete($Kategori->icon);
            }
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        if ($request->hasFile('photo')) {
            if ($Kategori->photo) {
                Storage::disk('public')->delete($Kategori->photo);
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $Kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori updated successfully!');
    }

    public function destroy($id)
    {
        $Kategori = Kategori::findOrFail($id);
        if ($Kategori->icon) {
            Storage::disk('public')->delete($Kategori->icon);
        }
        if ($Kategori->photo) {
            Storage::disk('public')->delete($Kategori->photo);
        }
        $Kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori deleted successfully!');
    }
    public function updateOrder(Request $request)
    {
        $order = $request->input();

        foreach ($order as $item) {
            Kategori::where('id', $item['id'])->update(['urutan' => $item['urutan']]);
        }

        return response()->json(['success' => true]);
    }
}
