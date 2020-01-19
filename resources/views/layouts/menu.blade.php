<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/home') }}">Home</a></li>

        @if(Auth::check())
            @if(Auth::user()->role_id == 3)
                <li><a href="{{ route('bangdiem') }}">Xem điểm</a></li>
            @else
                <li><a href="{{ route('qlhocsinh') }}">Quản lý Học sinh</a></li>
            @endif
        @else
            <li><a href="{{ route('/') }}">Về trang đăng nhập</a></li>           
        @endif

        <li><a href="">Roles</a></li>
        <li><a href="">Items</a></li>
    </ul>
    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif
    </ul>
</div>