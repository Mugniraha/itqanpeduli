<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'icon',
        'photo',
        'urutan',
    ];

    protected static function booted()
    {
        static::creating(function ($category) {
            $category->urutan = static::count() + 1; 
        });
    }

    // public function programs()
    // {
    //     return $this->hasMany(Campaign::class);
    // }
}
