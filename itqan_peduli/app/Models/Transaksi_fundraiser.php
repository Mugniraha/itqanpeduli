<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_fundraiser extends Model
{
    use HasFactory;

    protected $table = 'transaksi_fundraisers';

    protected $fillable = [
        'fundraiser',
        'nominal',
        'status',
        'nama_bank',
        'nomor_rekening',
        'kode_bank',
        'tipe'
    ];
}
