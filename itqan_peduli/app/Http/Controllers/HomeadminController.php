<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeadminController extends Controller
{
    public function index() {
        if(Auth::user()->role == 'user')
        {
            return redirect()->route('home1.index');
        }
        else {
            return view ('admin.konten.dashboard.index');
        }
    }
}
