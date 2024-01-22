<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category_level1 extends Model
{
    use HasFactory;
    public $table = "category_level1s";
    protected $fillable = [
        'id',
        'tittle',
        'link',
        'describe',
        'display',
        'outstand',
        'seo_id',
    ];
    public $timestamps = false;
    public function seo(): BelongsTo
    {
        return $this->belongsTo(Seo::class);
    }
}
