<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>BẾN XE - TÀU KIÊN GIANG</title>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Anltt">
    <!-- CSRF Token -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bxht.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bxht.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/section.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    {{-- Home --}}
    <!-- Fonts -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ url('/imgs/logo/logobxht_5G6_icon.ico') }}" type="image/x-icon">

    <style>
        .form-middle {

            /* position: absolute; */
            z-index: 9;
            left: 200px;
            background: #fff;
            top: 38%;
            padding: 15px;
            color: white;
            border-radius: 10px;
            min-width: 360px;
            max-width: 1128px;
            border: 1px solid rgba(239, 82, 34, .6);
        }

        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #27619c;
            border-color: #27619c;
        }

        .btn-primary {
            background-color: #27619c;
            border-color: #27619c;
        }

        .btn-primary:hover {
            background-color: #00b3cc;
            border-color: #00b3cc;

        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background: #f5f5f5;
        }

        #sidebarCollapse span {
            width: 80%;
            height: 2px;
            margin: 0 auto;
            display: block;
            background: #555;
            transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        }
        .carousel-item {
            height: auto;
        }
        .time {
            border: 2px solid #27619c;
            border-radius: 3px;
            width: auto;
            padding: 4px;
            margin: 10px;
            background-color: rgb(209 232 241 / 40%);
            display: inline-grid;
        }
    </style>

    @yield('style')
</head>

<body class="antialiased">
    <div id="app">
        <div class="header-middle p-0 bg-light xs-text-center pb-30">
            <div class="" style="margin-top:60px">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 sm-text-center">
                        <a href="/"><img src="{{ url('/imgs/logo/logobxht_5G6_icon.ico') }}"
                                style="width:100px; height:100px" alt="Logo"></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10">
                        <div class="row mt-20 pt-3">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                                    <i
                                        class="fa fa-envelope text-theme-colored font-36 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                                    <a href="#" class="font-12 text-gray text-uppercase"
                                        style="font-weight: bold;color: #01b3cc;">Liên hệ</a>
                                    <p style=" color: #27619c;"> bqlbxt.kg@kiengiang.gov.vn</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                                    <i
                                        class="fa fa-phone-square text-theme-colored font-36 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                                    <a href="#" class="font-12 text-gray text-uppercase"
                                        style="font-weight: bold;color: #01b3cc;">Gọi ngay</a>
                                    <p style=" color: #27619c;">
                                        02973.864.086</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 ">
                                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                                    <i
                                        class="far fa-building text-theme-colored font-36 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                                    <a href="#" class="font-12 text-gray text-uppercase"
                                        style="font-weight: bold;color: #01b3cc;">Địa chỉ</a>
                                    <p style=" color: #27619c;">168 Mai Thị Hồng Hạnh, Vĩnh Hoà Hiệp, Châu Thành, Kiên Giang
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #26648E">
            <div class="container">
                <a class="navbar-brand" href="/">BẾN XE - TÀU KIÊN GIANG</a>
                <button id="btn-sidebar" data-action="open" class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/intro">GIỚI THIỆU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/routesCar">TUYẾN XE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/routeBoat">TUYẾN TÀU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <!-- Footer -->
    <footer class="py-5 " style="background-color: #26648E">
        <div class="container">
            <div class="row text-white">
                <div class="col-2">
                    <img src="{{ url('/imgs/logo/logobxht_5G6_icon.ico') }}" style="weight:100px; height:100px"
                        alt="Logo">
                </div>
                <div class="col-4">
                    <strong><span style="text-transform: uppercase;">BAN QUẢN LÝ BẾN XE - TÀU Kiên Giang</span></strong>
                    <ul>
                        <li>168 Mai Thị Hồng Hạnh, Vĩnh Hoà Hiệp, Châu Thành, Kiên Giang</li>
                        <li>SĐT: 02973.864.086</li>
                        <li>Email: bqlbxt.kg@kiengiang.gov.vn</li>
                    </ul>
                </div>
                {{-- @endforeach --}}
                <div class="col-2">
                    <strong>VỀ CHÚNG TÔI</strong>
                    <ul style="list-style:none">

                        <li><a class="acus" href="/intro">Giới thiệu</a></li>

                    </ul>
                </div>
                <div class="col-2">
                    <strong>LIÊN KẾT</strong>
                    <ul style="list-style:none">
                        <li><a class="acus" href="/">Trang chủ</a></li>

                        {{-- <li><a class="acus" href="{{route('services')}}">Hãng xe</a></li> --}}
                        <li><a class="acus" href="/routesCar">Tuyến xe</a></li>
                        <li><a class="acus" href="/routeBoat">Tuyến tàu</a></li>
                        <li><a class="acus" href="/posts">Tin tức</a></li>
                    </ul>
                </div>
                {{-- <div class="col-2">
                    <a class="btn btn-lg btn-primary btn-block" href="/contact">Liên hệ</a>
                </div> --}}
            </div>
        </div>
        <!-- /.container -->
    </footer>
    <script>
        $(document).ready(function() {

            $("#states").select2({
                // placeholder: "",
                allowClear: true
            });
            $("#btn-sidebar").click(function() {
                $("#collapsibleNavbar").slideToggle("slow");
            });
        });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    {{-- <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script> --}}
    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    @yield('scripts')
</body>

</html>
