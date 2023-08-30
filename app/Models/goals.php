<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goals extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_participation',
        'health_welfare',
        'living_arrangements',
        'skill_development',
        'type',
        'user_id', // Add 'user_id' to the fillable array
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
