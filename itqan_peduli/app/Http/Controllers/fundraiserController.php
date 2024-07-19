<?php

namespace App\Http\Controllers;
use \App\Models\Fundraiser;
use Illuminate\Http\Request;

class fundraiserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = 'fundraiser';
        $fundraisers = Fundraiser::paginate(10); // Adjust the number of items per page as needed
        return view('admin.konten.fundraiser.fundraiser', compact('slug', 'fundraisers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_duta' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'no_wa' => 'required|string|max:15',
            'alamat_email' => 'required|string|email|max:255',
            'provinsi' => 'required|string|max:255',
            'kabkota' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $data = $request->only([
            'jenis_duta', 
            'nama_lengkap', 
            'no_wa', 
            'alamat_email', 
            'provinsi', 
            'kabkota', 
            'password'
        ]);

        // Encrypt the password before saving
        $data['password'] = bcrypt($data['password']);

        Fundraiser::create($data);

        return redirect()->route('akun-fundraiser')->with('success', 'Pendaftaran berhasil!');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
