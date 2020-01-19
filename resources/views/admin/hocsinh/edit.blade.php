@extends('admin.layout.master')
@section('title')
    Sửa thông tin học sinh
@stop
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Học sinh
                    <small> {{$hoc_sinh->name}} </small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Tên học sinh</label>
                        <input class="form-control" name="Ten" type="text" placeholder="Điền tên vào..." value="{{$hoc_sinh->name}}" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Nhập email..." value="{{$hoc_sinh->email}}" />
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input class="form-control" name="password" type="password" placeholder="Nhập mật khẩu..." value="" />
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('hocsinh.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection