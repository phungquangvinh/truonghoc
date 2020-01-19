<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Monhoc;
class MonHocController extends Controller
{
    public function list()
    {
    	$bomon = db::table('monhoc')->get();
    	return view('admin.monhoc.list',['bomon'=>$bomon]);
    }    

    public function showcreate(){
    	return view('admin.monhoc.create');
    }

    public function create(Request $request){
    	$data = $request->all();        
        
    	$rules = ['name' => 'required|unique:monhoc,tenmonhoc'];
        $messages = [
            'name.required' => 'Tên môn học is required',
            'name.unique' => 'Tên môn học is already'
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
        	$monhoc = Monhoc::findOrFail($id);
        	$monhoc->tenmonhoc = $request->name;
        	$monhoc->save();
        }
        else{
        	$monhoc = new Monhoc();
        }
        $thanhcong = $monhoc->add((object)$data);
        $urlredirect = route('monhoc.add');
        return response()->json([
            'url' => $urlredirect
        ], 200);
    }

    public function showedit($id){
        $edit = Monhoc::findOrFail($id);
        return view('admin.monhoc.edit',['monhoc' => $edit]);
    }

    public function destroy($id)
    {
        DB::table("monhoc")->where('id',$id)->delete();
        return redirect()->route('monhoc.list')
                        ->with('Xóa thành công môn học');
    }
}
