<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    //protected $guarded=["id","created_at","updated_at"];
    protected $fillable = [
        'id',
        'title',
        'body',
    ];
}
