@extends('admin.layout.master')
@section('title')
    Tạo Lớp học mới
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
              <h3 class="box-title">Tạo lớp học mới</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('lop.list') }}" class="create_lop">Back</a>
            </div>
            <!-- /.box-header -->

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{ $err }}<br />
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
                
            <div class="box-body">
              <form action="" method="post" accept-charset="utf-8">
                  @csrf
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Tên lớp học</label>
                        <input class="form-control" name="tenlop" type="text" placeholder="Tên lớp học" />
                    </div>

                    <div class="form-group">
                        <label>ID khóa học</label>
                        <select name="id_khoahoc">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>          
                    </div>

                    <div class="form-group">
                        <label>Giáo viên chủ nhiệm</label>
                        <select name="id_gvcn">
                          @foreach($giao_vien as $gv)
                            <option value="{{$gv->id}}">{{$gv->id}} - {{$gv->name}}</option>
                          @endforeach
                        </select>     
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
              </form>
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