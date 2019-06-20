<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="{{site_url('assets/')}}img/avatar.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Krismon</h2><span>Web Developer</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="{{site_url()}}" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Main</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">                  
                <li class="active"><a class="menu" href="{{site_url()}}"> <i class="fa fa-home"></i>Home</a></li>
                <li class=""><a class="menu" href="{{site_url('catatan/masuk')}}"> <i class="fa fa-sign-in"></i>Pemasukan</a></li>
                <li class=""><a class="menu" href="{{site_url('catatan/keluar')}}"> <i class="fa fa-sign-out"></i>Pengeluaran</a></li>
                <li  class=""><a class="menu" href="{{site_url('catatan/histori')}}" ><i class="fa fa-bank"></i>Histori</a></li>
                <li  class=""><a class="menu" href="{{site_url('laporan')}}" ><i class="fa fa-file-pdf-o"></i>Laporan</a></li>
                </li>
                <li class=""><a href="{{site_url('auth/logout')}}" class="text-danger btn-logout"> <i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
