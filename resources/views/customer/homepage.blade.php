@extends('layouts.customer')

@section('style')
    <style>
        .project-tab {
            padding: 10%;
            margin-top: -8%;
        }

        .project-tab #tabs {
            background: #007b5e;
            color: #eee;
        }

        .project-tab #tabs h6.section-title {
            color: #eee;
        }

        .project-tab #tabs .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #0062cc;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 3px solid !important;
            font-size: 16px;
            font-weight: bold;
        }

        .project-tab .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #0062cc;
            font-size: 16px;
            font-weight: 600;
        }

        .project-tab .nav-link:hover {
            border: none;
        }

        .project-tab thead {
            background: #f3f3f3;
            color: #333;
        }

        .project-tab a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
        }
    </style>
@endsection

@section('content')
    <div id="demo" class="carousel slide" data-ride="carousel" style="width:100%;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src='{{ asset('/imgs/photos/benxetinhkiengiang (2).jpg') }}' alt="Los Angeles" width="100%" height="500">
            </div>
            <div class="carousel-item">
                <img src='{{ asset('/imgs/photos/benxetinhkiengiang.jpg') }}' alt="Chicago" width="100%" height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: -5%">
        <div class="form-middle mt-2 " style="width:650px">
            <div class="container">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active btn" data-toggle="tab" id="tuyenxe">
                        <span style="text-align: LEFT;font-size:18px;color: #135190;">
                            <strong>TUYẾN XE</strong>
                        </span>

                    </a>
                    <a class="nav-item nav-link btn" data-toggle="tab" id="tuyentau">
                        <span style="text-align: LEFT;font-size:18px;color: #135190;">
                            <strong>TUYẾN TÀU</strong>
                        </span>
                    </a>
                </div>
                <form method="GET" action="/gettuyenxetau/tuyenxe" id="frm_tuyentauxe">
                    <div class="pt-4 container">
                        <div id="home" class="tab-pane fade-in active">
                            {{-- @csrf --}}
                            <div class="row">
                                <div class="col-5" style="width:200px">
                                    <div class="form-group">
                                        <label for="" style="color: #135190;">Nơi đi</label>
                                        <select class="form-control" name="noidi" id="noidi">
                                            <option value="0"></option>
                                            @foreach ($noidi as $row)
                                                <option value="{{ $row->ben_id }}">{{ $row->ben_ten }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5" style="width:200px">
                                    <div class="form-group">
                                        <label for="" style="color: #135190;">Chọn nơi đến</label>
                                        <select class="form-control" name="noiden" id="noiden"></select>
                                    </div>
                                </div>
                                <div class="col-2 pt-4" style="width:200px">
                                    <button type="submit" name="submit" id="btn_tuyentauxe" data-type="tuyenxe"
                                        class="btn btn-primary btn-lg btn-block">TÌM</button>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="text-danger">{{ session('status') }}</div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row p-3 mx-3 container-fuild px-3" style="
                                                        align-items: center;
                                                        justify-content: center;"
                                                    id="datacard">
        <div class="section-content">
            <div class="pb-3" style="text-align: center;font-size:30px;color: #135190;">
                <span><strong>TUYẾN PHỔ BIẾN</strong></span>
            </div>
            <div class="row p-5">
                @foreach ($benchinh as $row)
                    <div class="col-lg col-sm col-md" style="">
                        <div class="shadow list-group">
                            <img class="card-img-top rounded" src="{{ asset('imgs/photos/anhcard.jpg') }}"
                                alt="Card image cap" height="130px" width="auto">
                            <h6
                                style="
                        color: #fff;
                        position: absolute;
                        top: 70px;
                        left: 30px">
                                @if ($row->loaiben_id == '1')
                                    Tuyến xe từ
                                @endif
                                @if ($row->loaiben_id == '2')
                                    Tuyến tàu từ
                                @endif
                                <br><span><b>{{ $row->ben_ten }}</b></span>
                            </h6>
                            <div data-tuyenphobien="{{ $row->ben_id }}" id="{{ $row->ben_id }}" class="tuyenphobien">
                                {{-- appen từ js --}}
                            </div>
                            <div class="list-group-item">
                                    @if ($row->loaiben_id == '1')
                                        <a data-benid="{{ $row->ben_id }}" href="/routesCar/{{ $row->ben_id }}"> Xem thêm...</a>
                                    @endif
                                    @if ($row->loaiben_id == '2')
                                        <a data-benid="{{ $row->ben_id }}" href="/routeBoat/{{ $row->ben_id }}"> Xem thêm...</a>
                                    @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <div class="container-fuild px-3">
        <div class="section-content px-5">
            <div class="row equal-height-inner mt-sm-0 pt-3">
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow animated fadeInLeft animation-delay1"
                    style="min-height: 10.21em; visibility: visible;">
                    <div class="sm-height-auto bg-theme-colored" style="min-height: 142.94px;">
                        <div class="text-center pt-20 pb-sm-30">
                            <div class="icon-box text-center" style="padding: 5px 5px;">
                                <a class="icon bg-silver-light icon-circled" href="#"> <i
                                        class="fa fa-car text-theme-colored"></i> </a>

                            </div>
                            <div style="padding: 0px 5px; margin-top:20px">

                                <h5 class="text-white">NHIỀU TUYẾN XE </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow animated fadeInLeft animation-delay2"
                    style="min-height: 10.21em; visibility: visible;">
                    <div class="sm-height-auto bg-theme-colored2" style="min-height: 142.94px;">
                        <div class="text-center pt-20 pb-sm-30">
                            <div class="icon-box text-center" style="padding: 5px 5px;">
                                <a class="icon bg-silver-light icon-circled" href="#"><i
                                        class="fas fa-globe text-theme-colored"></i></a>
                            </div>
                            <div style="padding: 0px 5px; margin-top:20px">
                                <h5 class="text-white">DỊCH VỤ CHUYÊN NGHIỆP</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow animated fadeInLeft animation-delay3"
                    style="min-height: 10.21em; visibility: visible;">
                    <div class="sm-height-auto bg-theme-colored" style="min-height: 142.94px;">
                        <div class="text-center pt-20 pb-sm-30">
                            <div class="icon-box text-center" style="padding: 5px 5px;">
                                <a class="icon bg-silver-light icon-circled" href="#"> <i
                                        class="far fa-calendar-check text-theme-colored"></i> </a>
                            </div>
                            <div style="padding: 0px 5px; margin-top:20px">
                                <h5 class="text-white">LỊCH TRÌNH LINH ĐỘNG</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow animated fadeInLeft animation-delay4"
                    style="min-height: 10.21em; visibility: visible;">
                    <div class="sm-height-auto bg-theme-colored2" style="min-height: 142.94px;">
                        <div class="text-center pt-20 pb-sm-30">
                            <div class="icon-box text-center" style="padding: 2px 2px;">
                                <a class="icon bg-silver-light icon-circled" href="#"> <i
                                        class="fa fa-phone  text-theme-colored"></i> </a>
                            </div>
                            <div style="padding: 0px 5px; margin-top:20px">
                                <h5 class="text-white">TỔNG ĐÀI 02973.864.086</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.News -->
        <!-- Portfolio Section -->
        <!--  -->
    </div>
    <!-- /. -->

    <!-- Hotline -->
    <div class="row equal-height-inner mt-sm-0 px-5">
        <div class="col-12 wow animated fadeInLeft animation-delay1" style="min-height: 10.21em; visibility: visible;">
            <div class="sm-height-auto bg-theme-colored" style="min-height: 142.94px;">
                <div class="text-center pt-20 pb-sm-30">
                    <div style="padding: 15px 5px; margin-top:20px">
                        <h5 class="text-white">Hotline hỗ trợ khách hàng</h5>
                    </div>

                    <div style="padding: 0px 5px;">

                        <h2 class="text-white">02973.864.086</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Hotline -->
    <!-- Introduction -->
    <div class="row px-5" style="margin-top:15px; ">
        <div class="col-lg-6" style="display: block;">
            <div class="pb-3" style="text-align: center;font-size:30px;color: #135190;">
                <span><strong>GIỚI THIỆU</strong></span>
            </div>
            <p><span><strong>BẾN XE - TÀU KIÊN GIANG</strong></span></p>
            <p>Xã hội hiện đại nhu cầu của con người ngày càng cao, trước đây chỉ cần ăn no mặc ấm giờ đây thì ăn ngon mặc
                đẹp. Ngày nay, do nhu cầu tận hưởng cuộc sống, con người sẵn sàng bỏ tiền ra để mua sự tiện lợi và phục vụ
                chu đáo… Trong đó nhu cầu du lịch ngày càng chiếm ưu thế, mà du lịch thì không thể tách rời với phương tiện
                vận chuyển, dịch vụ ăn uống và lưu trú. Đáp ứng nhu cầu du lịch của con người thì bến xe Kiên Giang cung cấp
                nhiều dịch vụ phương tiện vận chuyển và nâng cao từ chất lượng xe cho đến cách phục vụ. Kiên Giang là xứ sở yên
                bình, thơ mộng là điểm đến lý tưởng hội đủ những điều tốt đẹp mà thiên nhiên ban tặng có sông, núi, biển,
                hồ, đền chùa, lăng tẩm… di tích lịch sử, danh lam thắng cảnh hữu tình, ẩm thực phong phú, người dân hiền hòa
                thân thiện… Vì vậy mà các công ty cung cấp dịch vụ vận chuyển, cùng các nhà xe lớn nhỏ đều mở các chuyến xe
                2 chiều rải đều tất cả các tỉnh thành trong cả nước trải dài từ Nam ra Bắc và từ ngược lại với thời gian
                khởi hành liên tục thuận tiện cho du khách chủ động trong các chuyến đi, như: Phương Trang, Kumho, Tuấn Nga,
                Huệ Nghĩa, Trang Ngọc Phát… cùng rất nhiều nhà xe lớn nhỏ khác, đến các tỉnh - thành phố lớn như: Thành phố
                Hồ Chí Minh, Cần Thơ, Long Xuyên, Đồng Tháp, Cà Mau, Hà Nội, Đà Lạt, Thái Bình, Quảng Ninh, Bình Phước, Quy
                Nhơn, Bình Dương, Tây Ninh, Phan Thiết (Bình Thuận)…</p>
        </div>
        <div class="col-lg-6" style="display: block;">
            <img class="img-fluid rounded" src="{{ asset('/imgs/photos/bentaurachgia.jpeg') }}" alt="project">

        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#tuyentau").click(function() {
                $('#noidi').empty();
                $('#noiden').empty();
                // $("#btn_tuyentauxe").attr("data-type", "tuyentau");
                $("#frm_tuyentauxe").attr("action", "/gettuyenxetau/tuyentau");
                $.ajax({
                    type: 'GET',
                    url: '/getbentau_noidi',
                    dataType: 'json',
                    //    data:[
                    //     'tuyen_bendi': 
                    //    ],
                    success: function(data) {
                        $('#noidi').append('<option value="0"></option>')
                        for (var i = 0; i < data.length; i++) {
                            console.log(data[i].ben_ten)
                            $('#noidi').append(`<option value="${data[i].ben_id}">
                                       ${data[i].ben_ten}
                                  </option>`);
                        }
                    }
                });
            });

            $("#tuyenxe").click(function() {
                $('#noidi').empty();
                $('#noiden').empty();
                // $("#btn_tuyentauxe").attr("data-type", "tuyenxe");
                $("#frm_tuyentauxe").attr("action", "/gettuyenxetau/tuyenxe");
                $.ajax({
                    type: 'GET',
                    url: '/getbenxe_noidi',
                    dataType: 'json',
                    //    data:[
                    //     'tuyen_bendi': 
                    //    ],
                    success: function(data) {
                        $('#noidi').append('<option value="0"></option>')
                        for (var i = 0; i < data.length; i++) {
                            console.log(data[i].ben_ten)
                            $('#noidi').append(`
                            <option value="${data[i].ben_id}">
                                       ${data[i].ben_ten}
                                  </option>`);
                        }
                    }
                });
            });

            $("#noidi").on('change', function() {
                $('#noiden').empty();
                // $('#noiden').append('<option><option>')
                $.ajax({
                    type: 'GET',
                    url: '/getbenxetau_noiden',
                    data: {
                        bendi_id: this.value
                    },
                    success: function(data) {
                        // console.log(data);
                        for (var i = 0; i < data.length; i++) {
                            console.log(data[i].ben_ten)
                            $('#noiden').append(`
                            <option value="${data[i].ben_id}">
                                        ${data[i].ben_ten}
                                    </option>`);
                        }
                    }
                })
            })

            $('.tuyenphobien').each(function(){
                noidi = $(this).data('tuyenphobien')
                noidi_id = $(this).attr('id');
                slot=0;
                $.ajax({
                    type: 'GET',
                    url: '/getbenxetau_noiden',
                    data: {
                        bendi_id: noidi
                    },
                    success: function(data) {
                        console.log(data);
                        // gioihan=data.length
                        for (var i = 0; i < 2; i++) {
                            if(data[i].loaikinhdoanh_id == 1){
                                action = 'tuyenxe'
                            }else{
                                action = 'tuyentau'
                            }
                            $('#'+data[i].tuyen_bendi).append(
                                '<a class="text-left container list-group-item list-group-item-action bg-image hover-overlay ripple shadow-1-strong rounded" href="gettuyenxetau/'
                                +action+
                                '?noidi='
                                +data[i].tuyen_bendi+
                                '&noiden='
                                +data[i].tuyen_benden+
                                '&submit="><span>'
                                +data[i].ben_ten+
                                '<br>'
                                +data[i].tuyen_culy+
                                ' km</span></a>'
                            );
                        }
                    }
                })
                $('#'+noidi_id).addClass('show');
            });
            // $("#datacard").removeAttr("style");

            


});
</script>
@endsection
