<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Khoahoc;
use DB;
class KhoahocController extends Controller
{
    public function index(){
    	$kh = Khoahoc::all();
    	return view('admin.khoahoc.index',['khoahoc'=>$kh]);
    }

    public function showcreate(){
    	return view('admin.khoahoc.create');
    }

    public function create(Request $request){
    	$data = $request->all();
        
        
    	$rules = ['name' => 'required|unique:khoahoc,tenkhoahoc'];
        $messages = [
            'name.required' => 'Tên khóa học is required',
            'name.unique' => 'Tên khóa học is already'
        ];
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ], 200);
        }
    	$data = array('name'=> $request->name);
    	
    	if($request->id != ""){
        	$id = $request->id;
        	$khoahoc = Khoahoc::findOrFail($id);
        	$khoahoc->tenkhoahoc = $request->name;
        	$khoahoc->save();
        }else{
        	$khoahoc = new Khoahoc();
        }
        $thanhcong = $khoahoc->add((object)$data);
        $urlredirect = route('khoahoc');
        return response()->json([
            'url' => $urlredirect
        ], 200);
        
    }

    public function showedit($id){
    	$edit = Khoahoc::findOrFail($id);
    	return view('admin.khoahoc.edit',['khoahoc'=>$edit]);    	
    }



    public function destroy($id)
    {
        DB::table("khoahoc")->where('id',$id)->delete();
        return redirect()->route('khoahoc')
                        ->with('Xóa thành công khóa học');
    }
}
