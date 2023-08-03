<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        'surname',
        'phone_number',
        'email',
        'password',
        'address',
        'is_active',
    ];
}
