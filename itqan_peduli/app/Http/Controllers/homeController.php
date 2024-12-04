<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Campaign;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $categories = Kategori::orderBy('urutan')->get();

        // Ambil semua campaign
        $campaigns_mendesak = Campaign::orderBy('urutan')->get();
        $campaigns_terpopuler = Campaign::take(3)->get();
        $campaigns_rekomendasi = Campaign::orderBy('urutan')->get();
        $campaigns_kategori = Campaign::all();

        // Tambahkan properti deadline dan total dana terkumpul ke setiap campaign
        $this->calculateCampaignDetails($campaigns_mendesak);
        $this->calculateCampaignDetails($campaigns_terpopuler);
        $this->calculateCampaignDetails($campaigns_rekomendasi);
        $this->calculateCampaignDetails($campaigns_kategori);

        return view('front.konten.beranda.home', compact(
            'banners',
            'categories',
            'campaigns_mendesak',
            'campaigns_terpopuler',
            'campaigns_rekomendasi',
            'campaigns_kategori'
        ));
    }

    /**
     * Menghitung hari tersisa dan total dana terkumpul untuk setiap campaign.
     */
    private function calculateCampaignDetails($campaigns)
    {
        $today = now();

        foreach ($campaigns as $campaign) {
            // Hitung deadline
            $deadline = $campaign->deadline ? \Carbon\Carbon::parse($campaign->deadline) : null;

            if ($deadline) {
                if ($today->lessThanOrEqualTo($deadline)) {
                    // Konversi ke bilangan bulat
                    $campaign->hari_tersisa = intval($today->diffInDays($deadline));
                    $campaign->is_expired = false;
                } else {
                    $campaign->hari_tersisa = 0;
                    $campaign->is_expired = true;
                }
            } else {
                $campaign->hari_tersisa = null;
                $campaign->is_expired = false;
            }

            // Hitung total dana terkumpul
            $campaign->totalDanaTerkumpul = DB::table('transaksi_zakat')
                ->where('nama_program_zakat', $campaign->title)
                ->where('status', 'approved')
                ->sum('nominal_total');
        }
    }
}
