<?php

// app/Models/BankAccount.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bank_account extends Model
{
    protected $fillable = [
        'user_id', 'account_name', 'bank_name', 'account_number'
    ];
}

