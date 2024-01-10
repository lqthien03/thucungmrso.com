<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function cart_product(){
    return $this->hasMany(Cart_Product::class);
}
    protected $fillable = [
        'user_id',
        'products_id',
        'updated_at',
        'created_at',
    ];

}
