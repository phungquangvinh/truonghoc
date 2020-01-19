@extends('layouts.index')
@section('title')
    Quản lý học sinh
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.menu')
    <section class="content-header">
      <h1>Quản lý học sinh </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      		<table id="example1" class="table table-bordered table-striped">
      			<caption>danh sách học sinh lớp 
              <select>
                @foreach($lop as $l)
                  <option>{{$l->tenlop}}</option>
                @endforeach
              </select>
            </caption>

            <?php $a = 1 ?>
      			<thead>
      				<tr>
      					<th>STT</th>
                <th>Tên học sinh</th>
                <th>Tên GVCN</th>
                <th>Điểm TB</th>
                <th>Hạnh kiểm</th>
                <th>Sửa</th>
                <th>Xóa</th>
      				</tr>
      			</thead>

            @foreach($hoc_sinh as $hs)
      			<tbody>
      				<tr>
      					<td>{{$a++}}</td>
                <td>{{$hs->name}}</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('hocsinh.edit',$hs->id)}}"> Edit</a></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="{{route('hocsinh.delete',$hs->id)}}"> Delete</a></td>
      				</tr>
      			</tbody>
            @endforeach

            <tfoot>
              <tr>
                <th>STT</th>
                <th>Tên học sinh</th>
                <th>Tên GVCN</th>
                <th>Điểm TB</th>
                <th>Hạnh kiểm</th>
                <th>Sửa</th>
                <th>Xóa</th>
              </tr>
            </tfoot>
      		</table>
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

@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
        swal({
          title: "Good job!",
          text: "You clicked the button!",
          icon: "success",
          button: "Aww yiss!",
        });
    </script>
@endsection