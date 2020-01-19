@extends('admin.layout.master')
@section('title')
    Danh sách học sinh
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
        <li class="active">Bảng học sinh</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách học sinh</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên học sinh</th>
	                  <th>Lớp</th>
                    <th>GV chủ nhiệm</th>
	                  <th>Điểm tổng kết</th>
	                  <th>Hạnh kiểm</th>
	                  <th>Ngày vào học</th>
	                  <th>Sửa info</th>
	                  <th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($hoc_sinh as $hs)
    	                <tr>
    	                  <td>{{$hs->id}}</td>
    	                  <td>{{$hs->name}}</td>
    	                  <td>6A3</td>
                        <td>Ngô Bá Khá</td>
    	                  <td> 4</td>
    	                  <td>Như beep</td>
    	                  <td>{{$hs->created_at}}</td>
    	                  <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('hocsinh.edit',$hs->id)}}"> Edit</a></td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('hocsinh.delete',$hs->id)}}"> Delete</a></td>
    	                </tr>
                  @endforeach
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên học sinh</th>
	                  <th>Lớp</th>
                    <th>GV chủ nhiệm</th>
	                  <th>Điểm tổng kết</th>
	                  <th>Hạnh kiểm</th>
	                  <th>Ngày vào học</th>
	                  <th>Sửa info</th>
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