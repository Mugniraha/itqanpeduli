<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return view('admin.konten.webUtama.konten', compact('konten'));
    }

    public function create()
    {
        return view('admin.konten.webUtama.inputkonten');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'province' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        Konten::create($request->all());
        return redirect()->route('konten.index')->with('success', 'Konten created successfully');
    }

    public function edit($id)
    {
        $konten = Konten::findOrFail($id);
        return view('admin.konten.webUtama.editkonten', compact('konten'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'province' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        $konten = Konten::findOrFail($id);
        $konten->update($request->all());

        return redirect()->route('konten.index')->with('success', 'Konten updated successfully');
    }

    public function destroy($id)
    {
        Konten::destroy($id);
        return redirect()->route('konten.index')->with('success', 'Konten deleted successfully');
    }
}

