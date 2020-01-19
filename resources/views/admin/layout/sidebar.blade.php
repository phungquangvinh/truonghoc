<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('admin_asset/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Hiệu trưởng</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Trang chủ admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('user.list')}}"><i class="fa fa-circle-o"></i> Danh sách 1</a></li>
            <li><a href="{{route('user.add')}}"><i class="fa fa-circle-o"></i>Thêm người dùng</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Giáo viên</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('giaovien.list')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
            <li><a href="{{route('giaovien.add')}}"><i class="fa fa-circle-o"></i> Thêm giáo viên</a></li>
          </ul>
        </li>
        <!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Quản lý bảng điểm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Tất cả danh sách</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Thêm điểm</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Quản lý học sinh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('hocsinh.list')}}"><i class="fa fa-circle-o"></i> Tất cả danh sách</a></li>
            <li><a href="{{route('hocsinh.list')}}"><i class="fa fa-circle-o"></i> Danh sách theo lớp</a></li>
            <li><a href="{{route('hocsinh.add')}}"><i class="fa fa-circle-o"></i> Thêm học sinh</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Lớp học</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('lop.list')}}"><i class="fa fa-circle-o"></i> Danh sách lớp học</a></li>
            <li><a href="{{route('lop.add')}}"><i class="fa fa-circle-o"></i> Thêm lớp học</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Môn học</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('monhoc.list')}}"><i class="fa fa-circle-o"></i> Danh sách môn học</a></li>
            <li><a href="{{route('monhoc.add')}}"><i class="fa fa-circle-o"></i> Thêm môn học</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Quản lý quyền</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('quanlyrole.list')}}"><i class="fa fa-circle-o"></i> Danh sách quyền</a></li>
            <li><a href="{{route('quanlyrole.add')}}"><i class="fa fa-circle-o"></i> Thêm quyền</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>