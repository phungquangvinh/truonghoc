<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    protected $table="role_user";
    
    public function user()
    {
        return $this->hasMany('App\User', 'role_user', 'id', 'user_id');
    }

    // public function role(){
    //     return $this->hasOne('App\Role');
    // }
}