<?php

namespace App\Models;

use App\Models\productImage;
use App\Models\productColor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }


    public function productImages()
    {
        //'product_id' is a foreign key and the'id' is a primary key
        return $this->hasMany(ProductImage::class,'product_id','id');
    }

    public function productColors()
    {
        return $this->hasMany(ProductColor::class,'product_id','id');
    }
}
