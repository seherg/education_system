<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'course_id',
        'student_id'
    ];

}
