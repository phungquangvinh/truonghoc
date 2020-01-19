<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('/');

Route::group(['prefix'=>'admin', 'middleware'=>'checkuser'], function(){
	Route::get('/','AdminController@admin')->name('admin');

	Route::group(['prefix'=>'user'], function(){
		Route::get('list', [
			'as' => 'user.list',
			'uses' => 'AdminController@list'
		]);

		Route::get('/add', [
			'as' => 'user.add',
			'uses' => 'AdminController@add'
		]);

		Route::post('/add', 'AdminController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'user.edit',
			'uses' => 'AdminController@getEdit'
		]);
		Route::post('/edit/{id}', 'AdminController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'user.delete',
			'uses' => 'AdminController@getDelete'
		]);
	});

	Route::group(['prefix'=>'hocsinh'], function(){
		Route::get('list', [
			'as' => 'hocsinh.list',
			'uses' => 'HocSinhController@list'
		]);

		Route::get('/add', [
			'as' => 'hocsinh.add',
			'uses' => 'HocSinhController@getAdd'
		]);

		Route::post('/add', 'HocSinhController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'hocsinh.edit',
			'uses' => 'HocSinhController@getEdit'
		]);
		Route::post('/edit/{id}', 'HocSinhController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'hocsinh.delete',
			'uses' => 'HocSinhController@getDelete'
		]);
	});

	Route::group(['prefix'=>'giaovien'], function(){
		Route::get('list', [
			'as' => 'giaovien.list',
			'uses' => 'GiaoVienController@list'
		]);

		Route::get('/add', [
			'as' => 'giaovien.add',
			'uses' => 'GiaoVienController@getAdd'
		]);

		Route::post('/add', 'GiaoVienController@postAdd');

	    Route::get('/edit/{id}', [
			'as' => 'giaovien.edit',
			'uses' => 'GiaoVienController@getEdit'
		]);
		Route::post('/edit/{id}', 'GiaoVienController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'giaovien.delete',
			'uses' => 'GiaoVienController@getDelete'
		]);
	});

	Route::group(['prefix'=>'lop'], function(){
		Route::get('list',[
			'as' => 'lop.list',
			'uses' => 'LopController@list'
		]);

		Route::get('add',[
			'as' => 'lop.add',
			'uses' => 'LopController@createlop'
		]);

		Route::post('/add', 'LopController@postcreatelop');

		Route::get('/edit/{id}', [
			'as' => 'lop.edit',
			'uses' => 'LopController@getEdit'
		]);
		Route::post('/edit/{id}', 'LopController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'lop.delete',
			'uses' => 'LopController@getDelete'
		]);
	});

	Route::group(['prefix'=>'khoahoc'], function(){
		Route::get('list',[
			'as' => 'khoahoc.list',
			'uses' => 'KhoahocController@index'
		]);

		Route::get('add',[
			'as' => 'khoahoc.add',
			'uses' => 'KhoahocController@showcreate'
		]);

		Route::get('khoahoc/suakhoahoc/{id}',[
			'as' => 'editshowkh',
			'uses' => 'KhoahocController@showedit'
		]);

		Route::get('khoahoc/xoa/{id}',[
			'as' => 'deletekh',
			'uses' => 'KhoahocController@destroy'
		]);

		Route::post('khoahoc/themkhoahoc',[
			'as' => 'createkhoahoc',
			'uses' => 'KhoahocController@create'
		]);
	});

	Route::group(['prefix'=>'quanlyrole'], function(){
		Route::get('list',[
			'as' => 'quanlyrole.list',
			'uses' => 'RoleController@list'
		]);

		Route::get('add',[
			'as' => 'quanlyrole.add',
			'uses' => 'RoleController@getAdd'
		]);

		Route::post('/add', 'RoleController@postAdd');

		Route::get('/edit/{id}', [
			'as' => 'quanlyrole.edit',
			'uses' => 'RoleController@getEdit'
		]);
		Route::post('/edit/{id}', 'RoleController@postEdit');

		Route::get('/delete/{id}', [
			'as' => 'quanlyrole.delete',
			'uses' => 'RoleController@getDelete'
		]);
	});

	// Route::get('diemchitiet','BangDiemController@diemchitiet');

	Route::group(['prefix'=>'monhoc'], function(){
		Route::get('list',[
			'as' => 'monhoc.list',
			'uses'=> 'MonHocController@list'
		]);

		Route::get('/add',[
			'as' => 'monhoc.add',
			'uses'=> 'MonHocController@showcreate'
		]);

		Route::post('/add', 'MonHocController@create');

		Route::get('/edit/{id}',[
			'as' => 'monhoc.edit',
			'uses'=> 'MonHocController@showedit'
		]);

		Route::post('/edit/{id}', 'MonHocController@create');

		Route::get('/delete/{id}',[
			'as' => 'monhoc.delete',
			'uses' => 'MonHocController@destroy'
		]);
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'giaovien'], function(){
	Route::get('/',[
		'as'=> 'giaovien',
		'uses' => 'GiaoVienController@index'
	]);

	Route::get('list_hoc_sinh', [
		'as' => 'qlhocsinh',
		'uses' => 'GiaoVienController@qlhocsinh'
	]);
});

Route::group(['prefix'=>'hocsinh'], function(){
	Route::get('/',[
		'as'=> 'hocsinh',
		'uses' => 'HocSinhController@index'
	]);

	Route::get('bangdiem','HocSinhController@diem');
});