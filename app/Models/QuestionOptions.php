<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'options',
        'question_id',
    ];

    public function Questions()
    {
        return $this->belongsTo(Questions::class);
    }

}
