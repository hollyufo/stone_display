<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "description",
        "min_order",
        "dimentions",
        "id_category",
        "thumbnail",
        "gallery"
    ];

    protected $casts = [
        "dimentions" => "array",
        "gallery" => "array"
    ];


    /**
     * Get the Category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
