<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'content',
    ];
    public function comment(){
        return this->belongsto(User::class,'user_id','id');
    }
}
