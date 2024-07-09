<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hitungZakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.konten.hitungZakat.index');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'interest' => 'nullable|numeric',
        ]);

        $amount = $validated['amount'];
        $interest = $validated['interest'] ?? 0;
        $nisab = 85 * 850000; // Example nisab threshold
        $zakatAmount = 0;

        if ($amount >= $nisab) {
            $zakatAmount = ($amount + $interest) * 0.025;
        }

        return back()->with('zakatAmount', $zakatAmount);
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
        //
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
