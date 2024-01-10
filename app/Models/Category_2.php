<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tittle',
        'link',
        'description',
    ];
    public function Category2Childrent(){
        return $this->hasmany(Product::class, 'category_2_id');
    }
}
