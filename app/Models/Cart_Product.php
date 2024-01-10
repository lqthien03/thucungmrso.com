<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    use HasFactory;
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_id')->withPivot('quantity');
    }
    protected $table = 'cart_products';
    protected $fillable = [
        'cart_id',
        'products_id',
        'updated_at',
        'created_at',
    ];
}
