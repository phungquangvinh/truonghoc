<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends Model
{
    protected $table="roles";

    public function user()
    {
        return $this->belongsToMany('App\User', 'role_user', 'user_id','role_id');
    }
}
