<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'address',
        'age',
        'type_of_disability',
        'ndis_nominee',
        'support_coordinator',
        'date_of_birth',
        'ndis_number',
        'phone_number'
    ];

}
