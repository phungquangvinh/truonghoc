<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Role;
use App\User;

class GiaoVienController extends Controller
{
    public function index()
    {
        return view('giaovien.index');
    }

    public function qlhocsinh()
    {
        $hoc_sinh = db::table('users')->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_id', 3)->get();
        $lop = db::table('lop')->get();
        return view('giaovien.list_hoc_sinh', ['lop' => $lop, 'hoc_sinh' => $hoc_sinh]);
    }

    public function list()
    {
    	$giao_vien = db::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->where('role_id', 2)
            ->orWhere('role_id', 4)
            ->get();

    	return view('admin.giaovien.list', ['giao_vien' => $giao_vien]);
    }

    public function getAdd()
    {
    	return view('admin.giaovien.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'Ten' => 'required|min:5|max:50|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'confirmed',
        ],
        [
            'Ten.required' => 'Nhập tên user đê',
            'Ten.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
            'Ten.max' => 'Viết dài quá, xóa bớt đê',
            'Ten.unique' => 'Tên đã tồn tại!',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại!',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
        ]);

        $giao_vien = new User;

        $giao_vien->name = $request->Ten;
        $giao_vien->email = $request->email;
        $giao_vien->password = bcrypt($request->password);

        $giao_vien->save();
        $giao_vien->attachRole($request->quyen);
        return redirect()->back()->with('thongbao', 'Thêm giáo viên thành công');
    }

    public function getEdit($id)
    {
    	$giao_vien = User::findOrFail($id);
    	
    	return view('admin.giaovien.edit',['giao_vien' => $giao_vien]);
    }

    public function postEdit(Request $request, $id)
    {
    	$giao_vien = User::findOrFail($id);
    	$this->validate($request, [
    		'Ten' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'same:confirm-password'
    	],
    	[
    		'Ten.required' => 'Nhập tên giáo viên',
    		'Ten.min' => 'Tên phải trên 3 kí tự',
    		'Ten.max' => 'Tên phải dưới 50 kí tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    	]);

    	$giao_vien->name = $request->Ten;
        $giao_vien->email = $request->email;
        $giao_vien->password = bcrypt($request->password);
        
    	$giao_vien->save();
        $giao_vien->attachRole($request->quyen);
    	return redirect()->back()->with('thongbao', 'Sửa thông tin giáo viên thành công');
    }
}
