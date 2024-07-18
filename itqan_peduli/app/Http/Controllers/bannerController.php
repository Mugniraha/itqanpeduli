<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.konten.webUtama.slider', compact('banners'));
    }

    public function create()
    {
        return view('admin.konten.webUtama.inputSlider');
    }

    public function store(Request $request)
    {
        $request->validate([
            'link' => 'nullable|string|max:255',
            'image' => 'required|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        Banner::create($data);

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.konten.webUtama.editSlider', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'link' => 'nullable|string|max:255',
            'image' => 'nullable|image',
        ]);

        $Banner = Banner::findOrFail($banner->id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
            if ($Banner->photo) {
                Storage::disk('public')->delete($banner->photo);
            }
        }

        $banner->update($data);

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}
