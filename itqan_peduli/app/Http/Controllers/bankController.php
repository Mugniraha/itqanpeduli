<?php

namespace App\Http\Controllers;

use App\Models\bank_account;
use Illuminate\Http\Request;

class bankController extends Controller
{
    public function show($fundraiserId)
    {
        // Retrieve bank accounts related to the given fundraiser ID
        $bankAccounts = bank_account::where('id', $fundraiserId)->get();
        
        // Pass the fundraiser ID to the view
        return view('front.konten.akun.data-bank', compact('bankAccounts', 'fundraiserId'));
    }
    

    public function store(Request $request)
    {
        $bankAccount = bank_account::find($request->bank_account_id);

        // Store the selected bank account in the session
        session(['selectedBankAccount' => $bankAccount]);

        return redirect()->route('transaksi.show'); // Redirect to the commission page
    }

    public function storeBankAccount(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
        ]);

        // Save the bank account data to the database
        bank_account::create([
            'user_id' => auth()->id(),
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
            'fundraiser_id' => $request->fundraiser_id, // Make sure to include this field in your form
        ]);

        return redirect()->back()->with('success', 'Bank account added successfully.');
    }
}
