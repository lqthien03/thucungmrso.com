<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
    public function category2()
    {
        return $this->belongsTo(Category_2::class, 'category_2_id');
    }
}
