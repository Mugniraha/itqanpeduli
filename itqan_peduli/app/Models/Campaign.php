<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'category', 'photo', 'content', 'target',
        'deadline', 'donate_button_label', 'operational_fund_percentage',
        'fundraiser_reward_percentage', 'nominal1', 'nominal2', 'nominal3',
        'nominal4', 'nominal5', 'nominal6', 'tampilkan', 'urutan'
    ];

    protected static function booted()
    {
        static::creating(function ($campaign) {
            $campaign->urutan = static::count() + 1;
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($campaign) {
            if (empty($campaign->slug)) {
                $campaign->slug = Str::slug($campaign->title);
            }
        });
    }

    public function setTargetAttribute($value)
    {
        if ($value === 'unlimited') {
            $this->attributes['target'] = null;
        } else {
            $this->attributes['target'] = $value;
        }
    }

    public function getTargetAttribute($value)
    {
        return is_null($value) ? 'unlimited' : $value;
    }

    public function setDeadlineAttribute($value)
    {
        if ($value === 'unlimited') {
            $this->attributes['deadline'] = null;
        } else {
            $this->attributes['deadline'] = $value;
            // $this->attributes['deadline'] = Carbon::parse($value)->format('Y-m-d');
        }

    }

    public function getDeadlineAttribute($value)
    {
        return is_null($value) ? 'unlimited' : $value;
    }

}
