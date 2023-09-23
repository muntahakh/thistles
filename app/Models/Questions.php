<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_id',
        'questions',
        'instructions',
        'input_type',
        'sequence',
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
