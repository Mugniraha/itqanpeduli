<?php
namespace App\Http\Controllers;

use App\Models\Penyaluran;
use Illuminate\Http\Request;

class PenyaluranController extends Controller
{
    public function index()
    {
        $penyaluran = Penyaluran::all();
        return view('admin.konten.penyaluranDana.penyaluran', compact('penyaluran'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'required|string',
            'penerima_manfaat' => 'required|integer',
        ]);

        Penyaluran::create($validated);

        return redirect()->route('penyaluran.index')->with('success', 'Data successfully saved.');
    }

    public function edit($id)
    {
        $penyaluran = Penyaluran::findOrFail($id);
        return view('admin.konten.penyaluranDana.editPenyaluran', compact('penyaluran'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'program' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'required|string',
            'penerima_manfaat' => 'required|integer',
        ]);

        $penyaluran = Penyaluran::findOrFail($id);
        $penyaluran->update($validated);

        return redirect()->route('penyaluran.index')->with('success', 'Data successfully updated.');
    }

    public function destroy($id)
    {
        $penyaluran = Penyaluran::findOrFail($id);
        $penyaluran->delete();

        return redirect()->route('penyaluran.index')->with('success', 'Data successfully deleted.');
    }
}
