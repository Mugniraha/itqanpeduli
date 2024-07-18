<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaberbagiSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'mediaberbagi_host',
        'mediaberbagi_access_key',
    ];
}
