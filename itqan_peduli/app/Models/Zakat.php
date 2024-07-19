<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;
    protected $table = 'transaksi_zakat';
    protected $primaryKey = 'id';

    protected $foreignKeys = 'id_user';

    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nama_donatur',
        'nama_program_zakat',
        'tgl_transaksi',
        'metode_pembayaran',
        'nominal',
        'status',
        'doa',
        'id_transaksi',
        'checkout_link',
        'transaction_token',
        'qr_code_url',
        'order_id',
        'bukti_pembayaran',
        'id_user',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
