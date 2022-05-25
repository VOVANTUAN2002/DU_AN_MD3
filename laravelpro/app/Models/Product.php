<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table    = 'products';
    protected $fillable = [
    'id',
    'name',
    'address',
    'price',
    'description',
    'user_id',
    'product_category_id',
    'area',
    'juridical',
    'google_map',
    'stress_width',
    'province_id',
    'district_id',
    'ward_id'
];
    public $timestamps  = false;

    public function product_images()
    {
        return $this->belongsToMany(ProductImage::class , 'product_id' , 'id');
    }
}