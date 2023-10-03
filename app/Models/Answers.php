<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'file_name',
        'cost',
        'questions_id',
        'user_id',
        'is_skipped',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Questions()
    {
        return $this->belongsTo(Questions::class);
    }

}
