<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_id',
        'user_id',
        'day',
        'hours',
        'times_of_day',
        'support',
        'ratio',
        'explanation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function QuestionHeading()
    {
        return $this->belongsTo(QuestionHeading::class);
    }

}

