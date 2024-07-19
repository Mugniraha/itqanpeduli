<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundraiser extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_duta', 
        'nama_lengkap', 
        'no_wa', 
        'alamat_email', 
        'provinsi', 
        'kabkota', 
        'password',
        'id_user'
    ];
}

