<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi_zakat'; // Merujuk ke tabel baru
    protected $fillable = [
        'nama_donatur',
        'nama_program_zakat',
        'tgl_transaksi',
        'metode_pembayaran',
        'nominal_zakat',
        'nominal_pengembangan_dakwah',
        'nominal_total',
        'status',
        'doa',
        'id_transaksi',
        'checkout_link',
        'transaction_token',
        'qr_code_url',
        'order_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
