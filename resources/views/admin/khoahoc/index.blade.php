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
              <h3 class="box-title">Danh sách khóa học</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('create_khoahoc') }}" class="create_lop">Thêm khóa học</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>Tên khóa học</th>
	                  <th>Sửa</th>
	                  <th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($khoahoc as $kh)
	                <tr>
                    
	                  <td>{{ $kh->tenkhoahoc }}</td>
	                  <td><a href="{{ route('editshowkh',$kh->id)}}">Sửa</a></td>
	                  <td>
                      <form action="{{route('deletekh',$kh->id)}}" method="delete">
                          <input type="submit" name="deletekh" value="Xóa">
                      </form>
                    </td>
                    
	                </tr>
                  @endforeach
                </tbody>
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