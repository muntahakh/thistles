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

    public function questions()
    {
        return $this->hasMany(Questions::class,'heading_id','id');
    }
    public function questionOptions()
    {
        return $this->hasMany(QuestionOptions::class,'heading_id','id');
    }
    public function schedule()
    {
        return $this->hasMany(schedule::class);
    }

}
