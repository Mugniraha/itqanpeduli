<?php

// app/Http/Controllers/NotificationController.php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\NotifikasiMail;

class NotifikasiMailController extends Controller
{
    public function index()
    {
        $notifications = NotifikasiMail::all();
        return view('admin.konten.email.notif', compact('notifications'));
    }

    public function create()
    {
        return view('admin.konten.email.inputNotifikasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        NotifikasiMail::create($request->all());

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification created successfully.');
    }
    public function show($id)
    {
        $notification = NotifikasiMail::findOrFail($id);
        return view('admin.konten.email.detail', compact('notification'));
    }

}

