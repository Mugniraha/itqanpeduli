<?php

namespace App\Http\Controllers;

use App\Models\Transaksi_fundraiser;
use Illuminate\Http\Request;

class TransaksiFundraiserController extends Controller
{
    public function index()
    {
        $transaksiFundraisers = Transaksi_fundraiser::all();
        return view('admin.konten.fundraiser.transaksi', compact('transaksiFundraisers'));
    }
}
