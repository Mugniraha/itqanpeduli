<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Fundraiser;
use App\Models\Transaksi;
use App\Models\Article;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB; 

class campaignController extends Controller
{
    public function index() {
        $campaigns = Campaign::all();
        return view('admin.konten.publikasi_program.donasi', compact('campaigns'));
    }

    public function dana() {
        $campaigns = Campaign::all();
        return view('admin.konten.danaTerkumpul.index', compact('campaigns'));
    }

    public function detailDana($campaignId) {
        // Fetch campaign details based on the selected campaign ID
        $campaign = Campaign::findOrFail($campaignId);
    
        // Fetch the related fundraiser data from the Fundraiser table
        $fundraiser = Fundraiser::where('id', $campaign->fundraiser_id)->first();
    
        // Fetch the related transactions from the transaksi_zakat table
        $transaksi_zakat = Transaksi::where('nama_program_zakat', $campaignId)->get();
    
        // Calculate the total saldo and other required values
        $totalSaldo = $transaksi_zakat->sum('nominal_total');
        $saldoOnline = $transaksi_zakat->where('metode_pembayaran', 'online')->sum('nominal_total');
        $saldoOffline = $transaksi_zakat->where('metode_pembayaran', 'offline')->sum('nominal_total');
    
        // Calculate remaining balance
        $sisaSaldo = $totalSaldo - $saldoOnline - $saldoOffline;
    
        // Pass data to the view
        return view('admin.konten.danaTerkumpul.detail', compact('campaign', 'fundraiser', 'transaksi_zakat', 'totalSaldo', 'saldoOnline', 'saldoOffline', 'sisaSaldo'));
    }
    
    
    public function index2()
    {
        $campaigns = Campaign::all()->map(function ($campaign) {
            $today = now();
            $deadline = $campaign->deadline ? \Carbon\Carbon::parse($campaign->deadline) : null;
        
            if ($deadline) {
                if ($today->lessThanOrEqualTo($deadline)) {
                    $campaign->hari_tersisa = floor($today->diffInDays($deadline));
                    $campaign->is_expired = false;
                } else {
                    $campaign->hari_tersisa = 0;
                    $campaign->is_expired = true;
                }
            } else {
                $campaign->hari_tersisa = null;
                $campaign->is_expired = false;
            }
    
            // Hitung total dana terkumpul per campaign
            $totalDanaTerkumpul = DB::table(table: 'transaksi_zakat')
                ->where('nama_program_zakat', $campaign->title)
                ->where('status', 'approved') // Hanya transaksi yang disetujui
                ->sum('nominal_total');
            
            // Simpan total dana terkumpul ke dalam objek campaign
            $campaign->totalDanaTerkumpul = $totalDanaTerkumpul;
    
            return $campaign;
        });
    
        // Ambil kategori kampanye
        $categories = Kategori::orderBy('urutan')->get();
        
        // Kirim data ke tampilan
        return view('front.konten.program-user.program', compact('campaigns', 'categories'));
    }
    
    public function index3($id) {
        $campaign = Campaign::find($id); // Ambil data campaign berdasarkan ID
        return view('front.konten.program-user.donasi-program', compact('campaign'));
    }


    public function create()
    {
        $categories = Kategori::orderBy('urutan')->get();
        return view('admin.konten.publikasi_program.pengalanganDana', compact('categories'));
    }

    /**
     * Store a newly created campaign in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'category' => 'required|string|max:255',
            'photo' => 'nullable|image',
            'content' => 'required|string',
            'target' => 'nullable|numeric',
            'deadline' => 'nullable|date_format:Y-m-d',
            'donate_button_label' => 'required|string|max:255',
            'operational_fund_percentage' => 'required|integer|min:0|max:100',
            'fundraiser_reward_percentage' => 'required|integer|min:0|max:100',
            'nominal1' => 'nullable|integer',
            'nominal2' => 'nullable|integer',
            'nominal3' => 'nullable|integer',
            'nominal4' => 'nullable|integer',
            'nominal5' => 'nullable|integer',
            'nominal6' => 'nullable|integer',
            'tampilkan' => 'nullable|boolean',
        ]);

        // Ambil semua data request kecuali photo, target, dan deadline
        $data = $request->except('photo', 'target', 'deadline', 'unlimited');

        // Proses photo jika ada
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('campaigns', 'public');
        }

        // Proses unlimited
        if ($request->has('unlimited')) {
            $data['deadline'] = null;
            $data['target'] = null;
        } else {
            $data['deadline'] = $request->input('deadline');
            $data['target'] = $request->input('target');
        }

        // Set tampilkan ke true jika ada di request, jika tidak set ke false
        $data['tampilkan'] = $request->has('tampilkan') ? true : false;

        // Buat campaign dengan data yang sudah diproses
        $campaign = new Campaign($data);
        $campaign->save();

        // Redirect atau response lainnya
        return redirect()->route('campaign.index')->with('success', 'Campaign created successfully.');
    }


    /**
     * Show the form for editing the specified campaign.
     */
    public function edit(Campaign $campaign)
    {
        $categories = Kategori::orderBy('urutan')->get();
        return view('admin.konten.publikasi_program.editCampaign', compact('campaign', 'categories'));
    }

    /**
     * Update the specified campaign in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string',
            'category' => 'required|string|max:255',
            'photo' => 'nullable|image',
            'content' => 'required|string',
            'target' => 'nullable|numeric',
            'deadline' => 'nullable|date_format:Y-m-d   ',
            'donate_button_label' => 'required|string|max:255',
            'operational_fund_percentage' => 'required|integer|min:0|max:100',
            'fundraiser_reward_percentage' => 'required|integer|min:0|max:100',
            'nominal1' => 'nullable|integer',
            'nominal2' => 'nullable|integer',
            'nominal3' => 'nullable|integer',
            'nominal4' => 'nullable|integer',
            'nominal5' => 'nullable|integer',
            'nominal6' => 'nullable|integer',
            'tampilkan' => 'nullable|boolean',
        ]);

        $campaign->fill($request->all());

        if ($request->hasFile('photo')) {
            if ($campaign->icon) {
                Storage::disk('public')->delete($campaign->photo);
            }
            $data['photo'] = $request->file('photo')->store('campaign', 'public');
        }

        if ($request->has('unlimited')) {
            $data['deadline'] = null;
            $data['target'] = null;
        }

        $campaign->save();

        return redirect()->route('campaign.index')->with('success', 'Campaign updated successfully.');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return redirect()->route('campaign.index')->with('success', 'Campaign deleted successfully.');
    }

    public function updateOrder(Request $request)
    {
        $order = $request->input();

        foreach ($order as $item) {
            Campaign::where('id', $item['id'])->update(['urutan' => $item['urutan']]);
        }

        return response()->json(['success' => true]);
    }

    public function show2($id)
    {
        $campaign = Campaign::findOrFail($id);
    
        // Hitung total dana terkumpul dari transaksi terkait program ini
        $totalDanaTerkumpul = DB::table('transaksi_zakat')
            ->where('nama_program_zakat', $campaign->title)
            ->where('status', 'approved') // Hanya transaksi yang disetujui
            ->sum('nominal_total');
    
        $campaign->totalDanaTerkumpul = $totalDanaTerkumpul;
    
        // Ambil artikel terbaru
        $articles = Article::latest()->take(4)->get();
    
        // Ambil data donatur terkait program ini
        $donaturs = DB::table('transaksi_zakat')
            ->where('nama_program_zakat', $campaign->title)
            ->where('status', 'approved') // Hanya transaksi yang disetujui
            ->select('nama_donatur', 'nominal_total as jumlah_donasi', 'tgl_transaksi', 'doa')
            ->latest('tgl_transaksi') // Urutkan berdasarkan tanggal transaksi
            ->take(4) // Batasi data yang diambil
            ->get();
    
        // Ambil data fundraisers
        $fundraisers = DB::table('fundraisers')->get();
    
        return view('front.konten.artikel.artikel', compact('campaign', 'totalDanaTerkumpul', 'articles', 'donaturs', 'fundraisers'));
    }
    


}
