<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionHeading extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sequence',
    ];

    public function Question()
    {
        return $this->hasOne(Question::class);
    }
}
