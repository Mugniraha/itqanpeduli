<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('admin.konten.dashboard.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
        ]);

        $user = Auth::user();

        try {
            $user->name = $request->name;
            $user->phone_number = $request->phone_number;
            // dd($user);
            $user->save();
            return redirect()->back()->with('success', 'Profile berhasil diupdate');
        } catch (\Exception $e) {
            Log::error('Profile update error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui profil');
        }
    }
}
