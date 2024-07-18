<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'data_banks';

    protected $fillable = [
        'id',
        'icon_bank',
        'kode_bank',
        'nama_bank',
        'nama_pemilik_bank',
        'nomor_rekening'
    ];
}
