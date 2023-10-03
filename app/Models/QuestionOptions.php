<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'options',
        'questions_id',
        'questions_sequence',
        'after_replacement_ques',
    ];

    public function Questions()
    {
        return $this->belongsTo(Questions::class);
    }

}
