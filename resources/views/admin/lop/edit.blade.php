@extends('admin.layout.master')
@section('title')
    Sửa thông tin lớp học
@stop
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Lớp học
                    <small> {{$lop->tenlop}} </small>
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
                        <label>Tên lớp học</label>
                        <input class="form-control" name="tenlop" type="text" placeholder="Điền tên vào..." value="{{$lop->tenlop}}" />
                    </div>

                    <div class="form-group">
                        <label>ID khóa học</label>
                        <input class="form-control" name="id_khoahoc" type="number" value="{{$lop->id_khoahoc}}" />
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
                    <a href="{{route('lop.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection