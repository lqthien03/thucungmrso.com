<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tittle',
        'description',
        'content',
        'created_at',
        'updated_at',
    ];
}
