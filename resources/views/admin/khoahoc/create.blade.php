@extends('admin.layout.master')
@section('title')
    Thêm khóa học
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
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tạo khóa học mới</h3>
            </div>
            <div class="box-header">
              <a href="{{ route('khoahoc') }}" class="create_lop">Back</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ route('createkhoahoc') }}" method="post" accept-charset="utf-8">
              	@csrf
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tên khóa học:</strong>
                        <br>
                        <input id="name_khoahoc" type="text" name="name" autocomplete="off" value="{{old('name')}}">
                        <p style="color:red; display: none" class="error errorName"></p>
                    </div>
                </div>
                <input type="hidden" name="url" class="hidden" value="{{url()->current()}}">
                <input type="submit" name="submit" id="submitkh" value="Thêm mới">
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
