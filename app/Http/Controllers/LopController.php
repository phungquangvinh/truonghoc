<?php

namespace App\Http\Controllers;
use App\Lophoc;
use DB;

use Illuminate\Http\Request;

class LopController extends Controller
{
    public function list()
    {
    	$lop = Lophoc::all();		
    	return view('admin.lop.list', ['lop' => $lop]);
    }

    public function createlop()
    {
        $giao_vien = db::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_id', 4)->get();
    	return view('admin.lop.createlop', ['giao_vien' => $giao_vien]);
    }

    public function postcreatelop(Request $request)
    {
        $this->validate($request, [
            'tenlop' => 'required|unique:lop',
        ],
        [
            'tenlop.required' => 'Nhập tên lớp học!',
            'tenlop.unique' => 'Tên lớp đã tồn tại!',
        ]);

        $lophoc = new Lophoc;
        $lophoc->tenlop = $request->tenlop;
        $lophoc->id_khoahoc = $request->id_khoahoc;
        $lophoc->id_gvcn = $request->id_gvcn;

        $lophoc->save();
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$lop = Lophoc::find($id);
        $giao_vien = db::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_id', 4)->get();
    	return view('admin.lop.edit', ['lop' => $lop, 'giao_vien' => $giao_vien]);
    }

    public function postEdit(Request $request, $id)
    {
        $lophoc = Lophoc::find($id);
        $this->validate($request, [
            'tenlop' => 'required',
        ],
        [
            'tenlop.required' => 'Nhập tên lớp học!',
        ]);

        $lophoc->tenlop = $request->tenlop;
        $lophoc->id_khoahoc = $request->id_khoahoc;
        $lophoc->id_gvcn = $request->id_gvcn;

        $lophoc->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
}
