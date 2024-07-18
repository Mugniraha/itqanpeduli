<?php

// app/Http/Controllers/MailSettingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailSettingController extends Controller
{
    public function index()
    {
        $settings = DB::table('mail_settings')->first();
        return view('admin.konten.email.mail', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mail_mailer' => 'required|string|max:255',
            'mail_host' => 'required|string|max:255',
            'mail_port' => 'required|string|max:255',
            'mail_username' => 'required|string|max:255',
            'mail_password' => 'required|string|max:255',
            'mail_encryption' => 'required|string|max:255',
            'mail_from_address' => 'required|string|max:255',
            'mail_from_name' => 'required|string|max:255',
        ]);

        DB::table('mail_settings')->updateOrInsert(
            ['id' => 1], // Assuming you have a single row
            $request->only([
                'mail_mailer', 'mail_host', 'mail_port', 'mail_username', 'mail_password', 'mail_encryption', 'mail_from_address', 'mail_from_name'
            ])
        );

        return redirect()->route('mail-settings.index')->with('success', 'Settings updated successfully.');
    }
}
