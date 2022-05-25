<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use HasFactory;
    protected $table    = 'user_product';
    protected $fillable = ['id','product_id','user_id'];
    public $timestamps  = false;

    public function users()
    {
        return $this->hasMany(Product::class,'id',User::class);
    }
}
