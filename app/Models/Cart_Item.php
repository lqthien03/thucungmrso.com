<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    use HasFactory;
    use HasFactory;
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_id')->withPivot('quantity');
    }
    protected $table = 'cart_items';
    protected $fillable = [
        'cart_id',
        'product_id',
        'updated_at',
        'created_at',
    ];
}
