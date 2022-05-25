<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $table    = 'product_images';
    protected $fillable = ['id','product_id','product_id'];
    public $timestamps  = false;

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
