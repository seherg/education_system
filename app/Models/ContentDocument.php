<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentDocument extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'content_id',
        'document'
    ];
}
