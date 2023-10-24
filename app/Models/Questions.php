<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_id',
        'guidance_notes',
        'questions',
        'instructions',
        'input_type',
        'sequence',
        'number'
    ];

    public function QuestionHeading()
    {
        return $this->belongsTo(QuestionHeading::class);
    }

    public function QuestionOptions()
    {
        return $this->HasMany(QuestionOptions::class);
    }

    public function Answers()
    {
        return $this->HasMany(Answers::class);
    }
}
