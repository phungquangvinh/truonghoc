<?php

namespace App\Http\Controllers;
use App\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list()
    {
    	$roles = Role::all();		
    	return view('admin.role.list', ['roles' => $roles]);
    }

    public function getAdd()
    {
        return view('admin.role.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|unique:roles,name',
            'display_name' => 'required|min:3|unique:roles,display_name',
        ],
        [
            'name.required' => 'Nhập tên quyền',
            'name.min' => 'Tên quyền tối thiểu 3 kí tự',
            'name.unique' => 'Tên quyền đã tồn tại',
            'display_name.required' => 'Nhập tên hiển thị',
            'display_name.min' => 'Tên hiển thị tối thiểu 3 kí tự',
            'display_name.unique' => 'Tên hiển thị đã tồn tại',
        ]);

        $roles = new Role;
        $roles->name = $request->name;
        $roles->display_name = $request->display_name;
        $roles->description = $request->description;

        $roles->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getEdit($id)
    {
    	$roles = Role::find($id);
    	return view('admin.role.edit', ['roles' => $roles]);
    }

    public function postEdit(Request $request, $id)
    {
        $roles = Role::find($id);
        $this->validate($request, [
            'name' => 'required|min:3|unique:roles,name',
            'display_name' => 'required|min:3|unique:roles,display_name',
        ],
        [
            'name.required' => 'Nhập tên quyền',
            'name.min' => 'Tên quyền tối thiểu 3 kí tự',
            'name.unique' => 'Tên quyền đã tồn tại',
            'display_name.required' => 'Nhập tên hiển thị',
            'display_name.min' => 'Tên hiển thị tối thiểu 3 kí tự',
            'display_name.unique' => 'Tên hiển thị đã tồn tại',
        ]);

        $roles->name = $request->name;
        $roles->display_name = $request->display_name;
        $roles->description = $request->description;

        $roles->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
}
