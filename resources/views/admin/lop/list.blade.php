@extends('admin.layout.master')
@section('title')
    Danh sách lớp học
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
        <li class="active">Bảng lớp</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách lớp học</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('lop.add') }}" class="create_lop">Thêm Lớp học</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên lớp học</th>
                    <th>ID khóa học</th>
	                  <th>Giáo viên chủ nhiệm</th>
                    <th>Ngày tạo</th>
	                  <th>Sửa</th>
	                  <th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($lop as $l)
  	                <tr>
  	                  <td>{{$l->id}}</td>
  	                  <td>{{$l->tenlop}}</td>
                      <td>{{$l->id_khoahoc}}</td>
  	                  <td>{{$l->user->first()->name}}</td>
  	                  <td>{{$l->created_at}}</td>
  	                  <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('lop.edit',$l->id)}}"> Edit</a></td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('lop.delete',$l->id)}}"> Delete</a></td>
  	                </tr>
                  @endforeach
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
                    <th>Tên lớp học</th>
                    <th>ID khóa học</th>
                    <th>Giáo viên chủ nhiệm</th>
                    <th>Ngày tạo</th>
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