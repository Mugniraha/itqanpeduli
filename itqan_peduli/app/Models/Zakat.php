<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    use HasFactory;
    protected $table = 'zakat';
    protected $primaryKey = 'id';

    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'nama_donatur',
        'nama_program_zakat',
        'tgl_transaksi',
        'metode_pembayaran',
        'nominal',
        'status'
    ];
}
