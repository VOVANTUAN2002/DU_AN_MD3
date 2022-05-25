<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    protected $table    = 'provinces';
    protected $fillable = ['id','name'];
    public $timestamps  = false;

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
