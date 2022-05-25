<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroupRole extends Model
{
    use HasFactory;
    protected $table    = 'user_group_role';
    protected $fillable = ['id','user_group_id','role_id'];
    public $timestamps  = false;

    public function users()
    {
        return $this->hasMany(User::class,Role::class);
    }
}
