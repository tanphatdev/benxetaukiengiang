@extends('layouts.admin')
@section('content')
    <div>
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Số tuyến tàu/xe</span>
                {{-- <h3 class="page-title">Thông tin bến tàu - xe</h3> --}}
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Small Stats Blocks -->
        <div class="row">
            @foreach ($bentauxe as $row)
                <div class="col-lg col-md-6 col-sm-6 mb-4">
                    <div class="stats-small stats-small--1 card card-small">
                        <div class="card-body p-0 d-flex">
                            <div class="d-flex flex-column m-auto">
                                <div id="benid{{ $row->ben_id }}" data-ben_id="{{ $row->ben_id }}" data-loaiben_id="{{ $row->loaiben_id }}" class="stats-small__data text-center sotuyentheoben">
                                    <span class="stats-small__label text-uppercase">{{ $row->ben_ten }}</span>
                                    {{-- <h6 class="stats-small__value count my-3">130 <i class="fa fa-bus" aria-hidden="true"></i></h6> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Small Stats Blocks -->
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Thông tin liên hệ khách hàng</h6>
                    </div>
                    <div class="card-body p-0">
                        <div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__content">
                                <div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#">Võ Hoài Linh (0822.484.234)</a>
                                    <span class="text-muted">– 3 days ago</span>
                                </div>
                                <p class="m-0 my-1 mb-2 text-muted">
                                    Liên hệ Phòng vé
                                </p>
                                <div class="blog-comments__actions">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>Xem chi tiết
                                        </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-danger">
                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                            </span>Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__content">
                                <div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#">Võ Hoài Linh (0822.484.234)</a>
                                    <span class="text-muted">– 3 days ago</span>
                                </div>
                                <p class="m-0 my-1 mb-2 text-muted">
                                    Liên hệ Phòng vé
                                </p>
                                <div class="blog-comments__actions">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>Xem chi tiết
                                        </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-danger">
                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                            </span>Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comments__item d-flex p-3">
                            <div class="blog-comments__content">
                                <div class="blog-comments__meta text-muted">
                                    <a class="text-secondary" href="#">Võ Hoài Linh (0822.484.234)</a>
                                    <span class="text-muted">– 3 days ago</span>
                                </div>
                                <p class="m-0 my-1 mb-2 text-muted">
                                    Liên hệ Phòng vé
                                </p>
                                <div class="blog-comments__actions">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-white">
                                            <span class="text-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>Xem chi tiết
                                        </button>
                                        <button type="button" class="btn btn-white">
                                            <span class="text-danger">
                                                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                            </span>Xóa
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col text-center view-report">
                                <button type="submit" class="btn btn-white">View All Comments</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Discussions Component -->
            <!-- Top Referrals Component -->
            <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Đơn vị vận tải</h6>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-small list-group-flush">
                            @foreach ($bentauxe as $row)
                                <li id="donvivantai{{ $row->ben_id }}" data-ben_id="{{ $row->ben_id }}" class="list-group-item d-flex px-3 donvivantai">
                                    <a class="text-semibold text-fiord-blue" href="#">{{ $row->ben_ten }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Top Referrals Component -->
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('div li, aside').removeClass('active');
        $('#dashboard').addClass('active');
        $('.sotuyentheoben').each(function(){
            $ben_id=$(this).data('ben_id');
            $loaiben_id=$(this).data('loaiben_id');
            $.ajax({
                    type: 'GET',
                    url: '/manager/getchituyenByBendi',
                    data: {
                        ben_id: $ben_id,
                        loaiben_id: $loaiben_id
                    },
                    success: function(data) {
                        gioihan=data.length
                        // console.log(data[0],data[1],data[2]);
                        // gioihan=data.length
                        if(data[2] == 1){
                                $('#benid'+data[1]).append('<h6 class="stats-small__value count my-3">'+data[0]+' <i class="fa fa-bus" aria-hidden="true"></i></h6>')
                            }else{
                                $('#benid'+data[1]).append('<h6 class="stats-small__value count my-3">'+data[0]+' <i class="fa fa-ship" aria-hidden="true"></i></h6>')
                            }
                    }
                })
        });

        $('.donvivantai').each(function(){
            $ben_id = $(this).data('ben_id');
            // console.log( $ben_id)
            $.ajax({
                    type: 'GET',
                    url: '/manager/getdonviByBendi',
                    data: {
                        ben_id: $ben_id
                    },
                    success: function(data) {
                        console.log(data);
                        $('#donvivantai'+data[1]).append('<span class="ml-auto text-right text-semibold text-reagent-gray">'+data[0]+'</span>')
                    }
                })
        });

    })
</script>
@endsection