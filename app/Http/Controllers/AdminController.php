<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.index');
    }

    public function list()
    {
    	$user = User::all();
    	return view('admin.user.list', ['user'=>$user]);
    }

    public function add()
    {
        $role = Role::all();
        return view('admin.user.add', ['role' => $role]);
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

        $user = new User;

        $user->name = $request->Ten;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        $user->attachRole($request->quyen);
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$user = User::find($id);
    	$role = Role::all();
    	return view('admin.user.edit',['user' => $user, 'role' => $role]);
    }

    public function postEdit(Request $request, $id)
    {
    	$user = User::find($id);
    	$this->validate($request, [
    		'Ten' => 'required|min:5|max:50',
            'email' => 'required|email',
            'password' => 'confirmed',
    	],
    	[
    		'Ten.required' => 'Nhập tên user đê',
    		'Ten.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
    		'Ten.max' => 'Viết dài quá, xóa bớt đê',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    	]);

    	$user->name = $request->Ten;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

    	$user->save();
        $user->attachRole($request->quyen);
    	return redirect()->back()->with('thongbao', 'Sửa thông tin user thành công');
    }

    public function getDelete($id)
    {
    	$user = User::find($id);
    	$user -> delete();
    	return redirect()->back()->with('thongbao', 'Xóa user thành công');
    }
}
