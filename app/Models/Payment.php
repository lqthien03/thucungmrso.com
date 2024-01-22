<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ten',
        'dienthoai',
        'email',
        'city',
        'district',
        'wards',
        'diachi',
        'yeucaukhac',
        'products',
        'total_amount',
        'payments',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
