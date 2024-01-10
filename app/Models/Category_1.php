<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'tittle',
        'link',
        'description',
    ];
    public function Category1Childrent(){
        return $this->hasmany(Category_2::class, 'category_1_id');
    }
}
