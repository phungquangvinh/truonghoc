@extends('admin.layout.master')
@section('title')
    Danh sách môn học
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
        <li class="active">Bảng môn học</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách môn học</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('monhoc.add') }}" class="create_lop">Thêm môn học</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
                    <th>STT</th>
	                  <th>Tên môn học</th>
	                  <th>Sửa môn học</th>
	                  <th>Xóa môn học</th>
	                </tr>
                </thead>
                <tbody>
                  <?php $a = 1; ?>
                  @foreach($bomon as $bm)
	                <tr>
	                  <td>{{ $bm->id}}</td>
                    <td>{{$a++}}</td>
	                  <td>{{ $bm->tenmonhoc}}</td>
	                  <td><a href="{{ route('monhoc.edit',$bm->id)}}">Edit</a></td>
	                  <td>
                      <form action="{{route('monhoc.delete',$bm->id)}}" method="get">
                        <input type="submit" name="destroy" value="Delete">
                      </form>
                    </td>
	                </tr>
                  @endforeach
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
                    <th>STT</th>
                    <th>Tên môn học</th>
                    <th>Sửa môn học</th>
                    <th>Xóa môn học</th>
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