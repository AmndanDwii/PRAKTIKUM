<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
use HasFactory;
    
protected $fillable = [
    'sku', 'product_category', 'product_name', 'product_detail', 
    'product_brand', 'product_price', 'fileimages', 'status', 'deleted', 'slug'
];

public function category()
{
    return $this->belongsTo(ProductCategory::class, 'product_category');
}

public function brand()
{
    return $this->belongsTo(Brand::class, 'product_brand');
}

}