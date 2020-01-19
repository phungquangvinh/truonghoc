<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    protected $table = 'lop';

    public function khoahoc(){
    	return $this->belongsTo('App\Khoahoc','id_khoahoc','id');
    }

    public function user(){
    	return $this->belongsToMany('App\User', 'lop', 'id','id_gvcn');
    }
}
