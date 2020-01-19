@extends('admin.layout.master')
@section('title')
    Thêm quyền
@stop
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm quyền</h1>
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
                        <label>Tên quyền (viết liền không dấu)</label>
                        <input class="form-control" name="name" type="text" value="" />
                    </div>

                    <div class="form-group">
                        <label>Tên hiển thị</label>
                        <input class="form-control" name="display_name" type="text" value="" />
                    </div>

                    <div class="form-group">
                        <label>Mô tả</label>
                        <input class="form-control" name="description" type="text" value="" />
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('quanlyrole.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection