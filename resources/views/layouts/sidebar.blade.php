<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto ">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                        src="{{ url('/imgs/logo/logobxht_5G6_icon.ico') }}" alt="Shards Dashboard">
                    <span class="d-none d-md-inline ml-1">Admin</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item" id="dashboard">
                <a class="{{ request()->is('/manager/dashboard') ? 'active' : '' }} nav-link" href="/manager/dashboard">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item" id="donvivantai">
                <a class="{{ request()->is('manager/donvivantai*') ? 'active' : '' }} nav-link " href="/manager/donvivantai">
                    <i class="fa fa-th" aria-hidden="true"></i>
                    <span>Đơn vị vận tải</span>
                </a>
            </li>
            <li class="nav-item" id="tuyenvantai">
                <a class="{{ request()->is('/manager/tuyenvantai') ? 'active' : '' }} nav-link " href="/manager/tuyenvantai">
                    <i class="fa fa-exchange" aria-hidden="true"></i>
                    <span>Tuyến vận tải</span>
                </a>
            </li>
            <li class="nav-item" id="tintuc">
                <a class="{{ request()->is('manager/post*') ? 'active' : '' }} nav-link " href="/manager/posts">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span>Tin tức</span>
                </a>
            </li>
            <li class="nav-item" id="lienhekhachhang">
                <a class="{{ request()->is('/manager/lienhekhachhang') ? 'active' : '' }} nav-link " href="/manager/lienhekhachhang">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>Thông tin liên hệ khách hàng</span>
                </a>
            </li>
            <li class="nav-item" id="thongtinwebsite">
                <a class="{{ request()->is('/manager/thongtinwebsite') ? 'active' : '' }} nav-link " href="/manager/thongtinwebsite">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <span>Thông tin website</span>
                </a>
            </li>
        </ul>
    </div>
</aside>