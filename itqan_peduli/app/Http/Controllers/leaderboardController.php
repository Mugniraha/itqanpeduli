<?php

namespace App\Http\Controllers;
use App\Models\Leaderboard;

use Illuminate\Http\Request;

class leaderboardController extends Controller
{
    public function index()
    {
        // $slug = 'leaderboard';
        $leaderboardData = Leaderboard::all();

        // dd($leaderboardData);
        return view('admin.konten.fundraiser.leaderboard', compact('leaderboardData'));
    }
}
