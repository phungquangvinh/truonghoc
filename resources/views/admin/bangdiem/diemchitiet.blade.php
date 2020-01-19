@extends('admin.layout.master')
@section('title')
    Bảng điểm chi tiết
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
        <li class="active">Bảng điểm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bảng điểm chi tiết của học sinh</h3>
              <small>Nguyễn Thị A B </small>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên môn học</th>
	                  <th>Điểm hệ số 1</th>
	                  <th>Điểm hệ số 2</th>
	                  <th>Điểm hệ số 3</th>
	                  <th>Điểm trung bình</th>
	                  <th>Sửa điểm</th>
	                  <th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  <td>1</td>
	                  <td>Toán</td>
	                  <td>8</td>
	                  <td>9</td>
	                  <td> 4</td>
	                  <td>6.9</td>
	                  <td>X</td>
	                  <td>Vinh</td>
	                </tr>
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên môn học</th>
	                  <th>Điểm hệ số 1</th>
	                  <th>Điểm hệ số 2</th>
	                  <th>Điểm hệ số 3</th>
	                  <th>Điểm trung bình</th>
	                  <th>Sửa điểm</th>
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