<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class campaignController extends Controller
{
    public function index() {
        $campaigns = Campaign::all();
        return view('admin.konten.publikasi_program.donasi', compact('campaigns'));
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
}
