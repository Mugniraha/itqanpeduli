<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifikasiMail extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'konten',
    ];
}
