@extends('admin.layout.master')
@section('title')
    Danh sách giáo viên
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
        <li class="active">Bảng GV</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách giáo viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên giáo viên</th>
	                  <th>Email</th>
                    <th>Cấp quyền</th>
	                  <th>Sửa info</th>
	                  <th>Xóa GV</th>
	                </tr>
                </thead>
                <tbody>
                  @foreach($giao_vien as $gv)
	                <tr>                    
                      <td>{{$gv->id}} </td>
                      <td>{{$gv->name}}</td>
                      <td>{{$gv->email}}</td>
                      <td>
                          @if($gv->role_id == 2)
                              {{"Giáo viên"}}
                          @elseif($gv->role_id == 4)
                              {{"GV chủ nhiệm"}}
                          @endif
                      </td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('giaovien.edit',$gv->id)}}"> Edit</a></td>
                      <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('giaovien.delete',$gv->id)}}"> Delete</a></td>
	                </tr>
                  @endforeach    
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
                    <th>Tên giáo viên</th>
                    <th>Email</th>
                    <th>Cấp quyền</th>
                    <th>Sửa info</th>
                    <th>Xóa GV</th>
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