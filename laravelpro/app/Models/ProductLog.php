<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLog extends Model
{
    use HasFactory;
    protected $table    = 'product_logs';
    protected $fillable = ['id','product_id','content'];
    public $timestamps  = false;

    public function products()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }
}
