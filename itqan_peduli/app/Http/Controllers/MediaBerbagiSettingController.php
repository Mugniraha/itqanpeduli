<?php

// app/Http/Controllers/MediaBerbagiSettingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaBerbagiSettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('mediaberbagi_settings')->first();
        return view('admin.konten.mediaBerbagiSetting.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mediaberbagi_host' => 'required|string|max:255',
            'mediaberbagi_access_key' => 'required|string|max:255',
        ]);

        DB::table('mediaberbagi_settings')->updateOrInsert(
            ['id' => 1], // Assuming you have a single row
            $request->only(['mediaberbagi_host', 'mediaberbagi_access_key'])
        );

        return redirect()->route('mediaberbagi-settings.index')->with('success', 'Settings updated successfully.');
    }
}

