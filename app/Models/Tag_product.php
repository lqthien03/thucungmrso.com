<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag_product extends Model
{
    use HasFactory;
    public $table = "tag_products";
    protected $fillable = [
        'id',
        'tittle',
        'link',
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
