@extends('admin.layout.master')
@section('title')
    Cấp quyền
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
        <li class="active">Quản lý quyền</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Quản lý quyền</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('quanlyrole.add') }}" class="create_lop">Thêm quyền</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  	<th>ID</th>
	                  	<th>Name</th>
                    	<th>Display name</th>
	                  	<th>Description</th>
	                  	<th>Sửa</th>
	                  	<th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($roles as $r)
	                <tr>
	                  	<td>{{$r->id}}</td>
	                  	<td>{{$r->name}}</td>
                    	<td>{{$r->display_name}}</td>
	                  	<td>{{$r->description}}</td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('quanlyrole.edit',$r->id)}}"> Edit</a></td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('quanlyrole.delete',$r->id)}}"> Delete</a></td>
	                </tr>
                  @endforeach
                </tbody>
                <tfoot>
	                <tr>
	                  	<th>ID</th>
	                  	<th>Name</th>
                    	<th>Display name</th>
	                  	<th>Description</th>
	                  	<th>Sửa</th>
	                  	<th>Xóa</th>
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