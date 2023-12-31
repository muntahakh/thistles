<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class background_info extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_name',
        'participant_num',
        'gender',
        'child_condition',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
