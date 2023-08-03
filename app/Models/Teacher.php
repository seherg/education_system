<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'identity_number',
        'name',
        'surname',
        'phone_number',
        'email',
        'password',
        'gender',
        'birth_date',
        'address',
        'is_active',
    ];
}
