<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'nama_donatur',
        'nomor_hp',
        'nama_program',
        'tgl_transaksi',
        'metode_pembayaran',
        'nominal',
        'nominal_pengembangan_dakwah',
        'nominal_total',
        'status',
        'doa',
        'id_transaksi',
        'checkout_link',
        'transaction_token',
        'order_id',
        'bukti_pembayaran'
    ];

    protected $casts = [
        'tgl_transaksi' => 'date',
        'nominal' => 'double',
        'nominal_pengembangan_dakwah' => 'double',
        'nominal_total' => 'double',
    ];
}

