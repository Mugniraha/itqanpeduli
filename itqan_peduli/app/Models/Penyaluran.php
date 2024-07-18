<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = 'penyalurans';

    // Specify the fillable fields
    protected $fillable = [
        'program',
        'nominal',
        'keterangan',
        'penerima_manfaat',
    ];
}
