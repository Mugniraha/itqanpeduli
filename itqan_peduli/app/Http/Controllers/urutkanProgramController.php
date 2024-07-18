<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class urutkanProgramController extends Controller
{
    public function index() {
        $campaigns = Campaign::orderBy('urutan')->get();
        return view('admin.konten.pengaturanProgram.urutkanProgram', compact('campaigns'));
    }

    // public function updateOrder(Request $request)
    // {
    //     $order = $request->input();

    //     foreach ($order as $item) {
    //         Campaign::where('id', $item['id'])->update(['urutan' => $item['urutan']]);
    //     }

    //     return response()->json(['success' => true]);
    // }
}
