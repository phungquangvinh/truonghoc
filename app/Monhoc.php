<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class Monhoc extends Model
{
	protected $table = 'monhoc';
	public $timestamps = false;
    public function add($data){
    	$monhoc = new Monhoc();

    	$monhoc->tenmonhoc = $data->name;
    	$monhoc->save();
    }
}
