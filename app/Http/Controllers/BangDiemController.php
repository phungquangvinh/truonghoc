<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangDiemController extends Controller
{
    public function list()
    {
    	return view('admin.bangdiem.list');
    }

    public function diemchitiet()
    {
    	return view('admin.bangdiem.diemchitiet');
    }
}
