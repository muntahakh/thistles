<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reports()
    {
        return $this->belongsTo(reports::class);
    }

    protected $fillable = [
        'user_id',
        'entity_id',
        'entity_type',
        'file_name',
        'file_path',
        'file_category',
        'file_size',

        // Add other attributes here
    ];
}
