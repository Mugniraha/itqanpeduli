<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\bank_account;
use App\Models\Transaksi_fundraiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiFundraiserController extends Controller
{
    // Method to display data on the admin page
    public function index()
    {
        $transaksiFundraisers = Transaksi_fundraiser::all();
        // Fetch bank accounts specific to admin or remove this if not needed on admin page
        $bankAccounts = bank_account::all(); 
        return view('admin.konten.fundraiser.transaksi', compact('transaksiFundraisers', 'bankAccounts'));
    }

    // Method to display bank account data for the withdrawal page
    public function show()
{
    $userId = auth()->id();

    // Fetch bank accounts for the current user
    $bankAccounts = bank_account::where('user_id', $userId)->get();

    // Fetch the fundraisers and calculate the total commission
    $totalKomisi = Campaign::where('id', $userId) // Adjust if 'fundraiser_id' is not correct
        ->get()
        ->reduce(function ($carry, $campaign) {
            $percentage = $campaign->fundraiser_reward_percentage / 100; // Convert percentage to decimal
            $amount = $campaign->fund_amount; // Ensure you have the amount field
            $carry += $percentage * $amount;
            return $carry;
        }, 0);

    // Retrieve the selected bank account from the session
    $selectedBankAccount = session('selectedBankAccount');

    // Fetch transaction history for the current user
    $transactionHistory = Transaksi_fundraiser::where('id', $userId)
        ->orderBy('created_at', 'desc') // Sort by most recent transactions
        ->get();

    return view('front.konten.akun.komisi', compact('bankAccounts', 'totalKomisi', 'selectedBankAccount', 'transactionHistory'));
}



    // Method to store new bank account
    public function storeBankAccount(Request $request)
    {
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'account_name' => 'required|string|max:255',
        ]);
    
        // Simpan data bank ke database
        bank_account::create([
            'user_id' => auth()->id(),
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
        ]);
    

        return redirect()->back()->with('success', 'Bank account added successfully.');
    }

    // BankController.php
    public function show2()
    {
        $totalKomisi = 0; // Replace with logic to calculate the total commission

        // Fetch the selected bank account from session
        $selectedBankAccount = session('selectedBankAccount');

        return view('front.konten.akun.komisi', compact('totalKomisi', 'selectedBankAccount'));
    }
    public function withdrawCommission(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric|min:1',
    ]);

    $userId = auth()->id();
    $amount = $request->input('amount');

    // Retrieve the selected bank account from the session
    $selectedBankAccount = session('selectedBankAccount');
    if (!$selectedBankAccount) {
        return redirect()->back()->with('error', 'Please select a bank account.');
    }

    $bankAccountId = $selectedBankAccount->id;

    // Retrieve total commission
    $totalKomisi = Campaign::where('id', $userId) // Adjust if 'fundraiser_id' is not correct
        ->get()
        ->reduce(function ($carry, $campaign) {
            $percentage = $campaign->fundraiser_reward_percentage / 100;
            $amount = $campaign->fund_amount;
            $carry += $percentage * $amount;
            return $carry;
        }, 0);

    if ($amount > $totalKomisi) {
        return redirect()->back()->with('error', 'Insufficient balance.');
    }

    // Start a transaction
    DB::beginTransaction();
    try {
        // Save the withdrawal
        Transaksi_fundraiser::create([
            'user_id' => $userId,
            'bank_account_id' => $bankAccountId,
            'amount' => $amount,
            'status' => 'pending', // or 'completed' depending on your logic
        ]);

        // Update the commission balance if needed
        // Example: You may need to update the `Campaign` model or similar
        // Example: $this->updateCommissionBalance($userId, $amount);

        DB::commit();
        return redirect()->back()->with('success', 'Withdrawal request has been submitted.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'An error occurred while processing your request.');
    }
}

public function showRiwayatFundraising()
{
    $userId = Auth::id();

    // Mengambil transaksi komisi
    $komisiTransactions = Transaksi_fundraiser::where('id', $userId)
        ->where('tipe', 'komisi')
        ->orderBy('created_at', 'desc')
        ->get();

    // Mengambil transaksi penarikan
    $penarikanTransactions = Transaksi_fundraiser::where('id', $userId)
        ->where('tipe', 'penarikan')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('front.konten.akun.riwayat-fundraising', compact('komisiTransactions', 'penarikanTransactions'));
}

    

}
