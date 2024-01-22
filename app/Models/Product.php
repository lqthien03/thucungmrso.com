<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public $table = "products";
    protected $fillable = [
        'id',
        'tittle',
        'link',
        'describe',
        'content',
        'image',
        'brand',
        'old_price',
        'new_price',
        'category_level1_id',
        'category_level2_id',
        'tag_product_id',
        'seo_id',
    ];
    public $timestamps = false;
    public function seo(): BelongsTo
    {
        return $this->belongsTo(Seo::class);
    }
    public function category_level1(): BelongsTo
    {
        return $this->belongsTo(Category_level1::class);
    }
    public function category_level2(): BelongsTo
    {
        return $this->belongsTo(Category_level2::class);
    }
    public function tag_product(): BelongsTo
    {
        return $this->belongsTo(Tag_Product::class);
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
    public function category2()
    {
        return $this->belongsTo(Category_2::class, 'category_2_id');
    }
}
