<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zakat;
use Carbon\Carbon;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'transaksi';
        return view('admin.konten.transaksi.index', compact('slug'));
    }

    public function showTransaksiOnline()
    {
        $slug = 'transaksiOnline';
        $transaksi = Zakat::all();
        return view('admin.konten.transaksi.transaksiOnline', compact('slug', 'transaksi'));
    }

    public function showTransaksiOnlineManual()
    {
        $slug = 'transaksiOnlineManual';
        $transaksi = Zakat::where('metode_pembayaran','like','Transfer%')->get();
        return view('admin.konten.transaksi.transaksiOnlineManual', compact('slug','transaksi'));
    }

    public function showDetailTransaksiOnlineManual($id)
    {
        $transaksi = Zakat::findOrFail($id);
        return view('admin.konten.transaksi.detailTransaksiOnlineManual', compact('transaksi'));
    }

    public function showTransaksiOffline()
    {
        $slug = 'transaksiOffline';
        $transaksi = Zakat::where('metode_pembayaran','offline')->get();
        return view('admin.konten.transaksi.transaksiOffline', compact('slug','transaksi'));
    }

    public function showAllTransaksi()
    {
        $transaksi = Zakat::all();
        return view('admin.konten.transaksi.index', compact('transaksi'));
    }

    public function showDetailTransaksi($id)
    {
        $transaksi = Zakat::findOrFail($id);
        return view('admin.konten.transaksi.detailTransaksi', compact('transaksi'));
    }

    public function showDetailTransaksiOffline($id)
    {
        $donaturManual = Zakat::findOrFail($id);
        if ($donaturManual && $donaturManual->tgl_transaksi) {
            $donaturManual->tgl_transaksi = Carbon::parse($donaturManual->tgl_transaksi)->format('Y-m-d');
        }
        return view('admin.konten.transaksi.detailTransaksiOffline', compact('donaturManual'));
    }

    public function editDetailTransaksi(Request $request)
    {
        $request->validate([
            'nominal_total' => 'required|string|max:255',
            'nama_donatur' => 'required|string|max:255',
        ]);
        // dd($request->id);
        $transaksi = Zakat::findOrFail($request->id);

        $transaksi->nominal_total = $request->nominal_total;
        $transaksi->nama_donatur = $request->nama_donatur;

        $transaksi->save();

        return redirect()->route('transaksi.showDetailTransaksi', ['id' => $transaksi->id])->with('success','Data berhasil diperbarui');
    }

    public function deleteDetailTransaksi(Request $request)
    {
        $transaksi = Zakat::findOrFail($request->id);
        $transaksi->delete();
        return redirect()->route('transaksi.showAllTransaksi')->with('success', 'Data bank berhasil dihapus.');
    }

    public function inputDonasiManual(Request $request)
    {
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'nama_program_zakat' => 'required|string|max:255',
            'fundraiser' => 'required|string|max:255',
            'email_donatur' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'nominal_total' => 'required|string|max:255',
            'tgl_transaksi' => 'required|date',
        ]);

        $donaturManual = new Zakat;
        $donaturManual->nama_donatur = $request->nama_donatur;
        $donaturManual->nama_program_zakat = $request->nama_program_zakat;
        $donaturManual->fundraiser = $request->fundraiser;
        $donaturManual->email_donatur = $request->email_donatur;
        $donaturManual->nomor_hp = $request->nomor_hp;
        $donaturManual->metode_pembayaran = 'Offline';
        $donaturManual->nominal_total = $request->nominal_total;
        $donaturManual->tgl_transaksi = $request->tgl_transaksi;
        $donaturManual->save();
        return redirect('/transaksiOffline')->with('success', 'Berhasil Menambah Data.');
    }

    public function editDonasiManual(Request $request)
    {
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'nama_program_zakat' => 'required|string|max:255',
            'fundraiser' => 'required|string|max:255',
            'email_donatur' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'nominal_total' => 'required|string|max:255',
            'tgl_transaksi' => 'required|date',
        ]);

        $donaturManual = Zakat::findOrFail($request->id);
        $donaturManual->nama_donatur = $request->nama_donatur;
        $donaturManual->nama_program_zakat = $request->nama_program_zakat;
        $donaturManual->fundraiser = $request->fundraiser;
        $donaturManual->email_donatur = $request->email_donatur;
        $donaturManual->nomor_hp = $request->nomor_hp;
        $donaturManual->metode_pembayaran = 'Offline';
        $donaturManual->nominal_total = $request->nominal_total;
        $donaturManual->tgl_transaksi = $request->tgl_transaksi;
        $donaturManual->save();
        return redirect()->back()->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function deleteDonasiManual(Request $request)
    {
        $donaturManual = Zakat::findOrFail($request->id);
        $donaturManual->delete();
        return redirect('/transaksiOffline')->with('success', 'Berhasil Menghapus Data.');
    }

    public function konfirmasiPembayaran(Request $request, $id)
    {
        $transaksi = Zakat::find($id);
        $transaksi->status = 'Terverivikasi';
        $transaksi->save();
        return redirect()->back()->with('success', 'Transaksi berhasil diverifikasi.');
    }

    public function editPembayaranOnlineManual(Request $request)
    {
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'nominal_total' => 'required|string|max:255',
        ]);

        $donaturManual = Zakat::findOrFail($request->id);
        $donaturManual->nama_donatur = $request->nama_donatur;
        $donaturManual->nominal_total = $request->nominal_total;
        $donaturManual->save();
        return redirect()->back()->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function deletePembayaranOnlineaManual(Request $request)
    {
        $donaturManual = Zakat::findOrFail($request->id);
        $donaturManual->delete();
        return redirect('/transaksiOnlineManual')->with('success', 'Berhasil Menghapus Data.');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
