@extends('admin.layout.master')
@section('title')
    Quản lý người dùng
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Bảng User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên người dùng</th>
	                  <th>Email</th>
	                  <th>Cấp quyền</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa user</th>
	                  <th>Xóa user</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($user as $u)
                    <tr>
                      <td>{{$u->id}}</td>
                      <td>{{$u->name}}</td>
                      <td>{{$u->email}}</td>
                      <td>{{$u->role->first()->display_name}}</td>
                      <td>{{$u->created_at}}</td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('user.edit',$u->id)}}"> Edit</a></td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('user.delete',$u->id)}}"> Delete</a></td>
                    </tr>
                  @endforeach	                
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên người dùng</th>
	                  <th>Email</th>
	                  <th>Cấp quyền</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa user</th>
	                  <th>Xóa user</th>
	                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@endsection