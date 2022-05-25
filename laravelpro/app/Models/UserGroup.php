<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    protected $table    = 'roles';
    protected $fillable = ['id','name','task','experience','description','role_id'];
    public $timestamps  = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
