<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
class Khoahoc extends Model
{
    protected $table = 'khoahoc';

    public function lop(){
    	return $this->hasMany('App\Lophoc');
    }
    public function add($data){
    	$khoahoc = new Khoahoc();

    	$khoahoc->tenkhoahoc = $data->name;
    	$khoahoc->save();
    }
}
