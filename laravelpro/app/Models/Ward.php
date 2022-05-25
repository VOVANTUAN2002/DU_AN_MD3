<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $table    = 'wards';
    protected $fillable = ['id','name','distrct_id'];
    public $timestamps  = false;

    public function products()
    {
        return $this->hasMany(Product::class,'id','distrct_id');
    }
}
