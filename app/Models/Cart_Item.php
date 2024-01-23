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
        'quantity',
        'updated_at',
        'created_at',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function CartChildrent(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function remove($productId){
        $item = $this->where('user_id', auth()->id())
        ->where('product_id', $productId)
        ->first();

        if($item){
            $item->delete();
            return true;
        }
        return false;
    }
}
