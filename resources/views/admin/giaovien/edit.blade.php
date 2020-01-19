@extends('admin.layout.master')
@section('title')
    Sửa thông tin giáo viên
@stop
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Giáo viên
                    <small> {{$giao_vien->name}} </small>
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
                        <label>Tên giáo viên</label>
                        <input class="form-control" name="Ten" type="text" placeholder="Điền tên vào..." value="{{$giao_vien->name}}" />
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Nhập email..." value="{{$giao_vien->email}}" />
                    </div>

                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input class="form-control" name="password" type="password" placeholder="Nhập mật khẩu..." value="" />
                    </div>
                    
                    <div class="form-group">
                        <label>Cấp quyền</label>
                        <select name="quyen">
                            <option value="2">Giáo viên</option>
                            <option value="4">GV chủ nhiệm</option>
                        </select>                        
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('giaovien.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection