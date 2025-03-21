@extends('layouts.customer')
@section('content')
    {{-- <header>
        <div class="form-cus">
            <form method="post" action="#">
                @csrf
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label for=""style="color: #135190;">Nơi đi</label>
                            <select class="form-control" name="noidi" id="noidi">
                            </select>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="form-group">
                            <label for=""style="color: #135190;">Chọn nơi đến</label>
                            <select class="form-control" name="noiden" id="noiden">
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <label for=""></label>
                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
                            @if ($title == 'tuyentau')
                                TÌM TÀU
                            @endif
                            @if ($title == 'tuyenxe')
                                TÌM XE
                            @endif
                        </button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </header> --}}
    <div class="card-body">
        <div class="card-title text-center">
            <div class="pb-3" style="text-align: center;font-size:30px;color: #135190;">
                {{-- <span id="title"><strong>TUYẾN TÀU</strong></span> --}}
                @if ($title == 'tuyentau')
                    <span id="title"><strong>TUYẾN TÀU</strong></span>
                @endif
                @if ($title == 'tuyenxe')
                    <span id="title"><strong>TUYẾN XE</strong></span>
                @endif
            </div>
            <div class="pb-3" style="text-align: center;font-size:30px;color:black;">
                {{-- <span id="title"><strong>TUYẾN TÀU</strong></span> --}}
                    <span>{{ $tennoidi->ben_ten }} - {{ $tennoiden->ben_ten }}</span>
            </div>
        </div>
        <div class="table-responsive px-5">
            <table id="datatable" style="display: none" class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr style="background: #27619c;text-align:center;color:white;font-weight: bold;">
                        <td>STT</td>
                        <td>
                            @if ($title == 'tuyentau')
                                Hãng tàu
                            @endif
                            @if ($title == 'tuyenxe')
                                Hãng xe
                            @endif
                        </td>
                        <td>Số điện thoại</td>
                        <td>Cự ly(Km)</td>
                        <td width="30%">Giờ chạy</td>
                        <td>Giá vé</td>
                        <td>Ghi chú</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach ($tuyentauxe as $row)
                    <tr>
                        <td>{{ $count++ }}</td>
                        {{-- <td>{{ $row->donvikinhdoanh_ten }}</td> --}}
                        {{-- <td>{{ $row->donvikinhdoanh_sdt }}</td> --}}
                        <td>{{ $row->donvikinhdoanh_ten }}</td>
                        <td>{{ $row->donvikinhdoanh_sdt }}</td>
                        <td>{{ $row->tuyen_culy }}</td>
                        <td class="text-center ">
                            <div data-chitiettuyen_id="{{ $row->chitiettuyen_id }}" id="{{ $row->chitiettuyen_id }}" class="row spantime">
                            </div>
                        </td>
                        <td>{{ $row->chitiettuyen_giave }}</td>
                        <td>{{ $row->chitiettuyen_ghichu }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.spantime').each(function(){
                chitiettuyen_id = $(this).data('chitiettuyen_id');
                $.ajax({
                        type: 'GET',
                        url: '/GetTimeByIdChiTietTuyen',
                        data: {
                            chitiettuyen_id: chitiettuyen_id
                        },
                        success: function(data) {
                            console.log(data);
                            gioihan=data.length
                            for (var i = 0; i < gioihan; i++) {
                                $('#'+data[i].chitiettuyen_id).append(
                                    '<span class="time col">'+data[i].giokhoihanh+'</span>'
                                )
                            }
                        }
                    })
            })
            $("#datatable").removeAttr("style");

        });
    </script>
@endsection
