<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table    = 'districts';
    protected $fillable = ['id','name','province_id'];
    public $timestamps  = false;

    public function products()
    {
        return $this->belongsTo(Product::class , 'province_id' , 'id');
    }
}
