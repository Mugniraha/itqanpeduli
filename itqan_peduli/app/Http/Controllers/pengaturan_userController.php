<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class pengaturan_userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function showAdmin()
    {
        // Ambil data pengguna dengan peran admin
        $admins = \App\Models\User::where('role', 'admin')->get(); // Sesuaikan nama kolom `role` jika berbeda
        $slug = 'admin';
        return view('admin.konten.user.admin', compact('slug', 'admins'));
    }
    

    public function showAkunting()
    {
        $slug = 'akunting';
        return view('admin.konten.user.akunting',compact('slug'));
    }

    public function showDonatur()
    {
        $slug = 'donatur';
        return view('admin.konten.user.donatur',compact('slug'));
    }

    public function showFundraiser()
    {
        $fundraisers = \App\Models\Fundraiser::all(); // Mengambil semua data fundraisers
        $slug = 'fundraiser';
        return view('admin.konten.user.fundraiser', compact('slug', 'fundraisers'));
    }
    

    public function showGerai()
    {
        $slug = 'gerai';
        return view('admin.konten.user.gerai',compact('slug'));
    }

    public function showProgram()
    {
        $slug = 'program';
        return view('admin.konten.user.program',compact('slug'));
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
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'tipeuser' => 'required|integer|in:1,2,3,4',
        ]);
    
        // Simpan data user
        $user = \App\Models\User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->tipeuser,
        ]);
    
        if ($request->tipeuser == 4) { // Jika tipe user adalah fundraiser
            \App\Models\Fundraiser::create([
                'id_user' => $user->id,
                'nama' => $request->nama, // Kirim nilai nama dari form
                'email' => $request->email, // Kirim nilai email dari form
            ]);
        }
    
        // Redirect berdasarkan tipe user
        $redirectUrls = [
            1 => '/admin',
            2 => '/program',
            3 => '/akunting',
            4 => '/fundraiser-user',
        ];
        return redirect($redirectUrls[$user->role_id] ?? '/admin')
            ->with('success', 'User berhasil ditambahkan.');
    }
    

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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.konten.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'tipeuser' => 'required|integer',
        ]);

        $data = [
            'name' => $request->nama,
            'email' => $request->email,
            'role_id' => $request->tipeuser,
        ];

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect('/admin')->with('success', 'Data user berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
