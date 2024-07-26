<?php

namespace App\Http\Controllers;

use App\Models\bank_account;
use App\Models\BankAccount; // Note the correct case for the model name
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bankController extends Controller
{
    public function show($fundraiserId)
    {
        $userId = Auth::id();
        $bankAccounts = BankAccount::where('user_id', $userId)->get();    
        // dd($bankAccounts);
        return view('front.konten.akun.data-bank', compact('bankAccounts','fundraiserId'));
    }

    

    


    public function store(Request $request)
    {
        $bankAccount = BankAccount::find($request->bank_account_id);

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
        BankAccount::create([
            'user_id' => auth()->id(),
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
        ]);

        return redirect()->back()->with('success', 'Bank account added successfully.');
    }
}
