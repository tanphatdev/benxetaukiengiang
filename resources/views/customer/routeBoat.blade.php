@extends('layouts.customer')
@section('content')
    <header>
        <div class="form-cus">
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="" style="color: #135190;">Nhập thông tin cần tìm</label>
                        <input id="myInput" class="form-control" type="text" placeholder="Search..">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row px-5 mb-3" style="margin-left: 30px">
        <a href="javascript:void(0)" onclick="openList(event, 'TuyenXe');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                <div style="text-align: LEFT;font-size:18px;color: #135190;">
                    <span><strong>DANH SÁCH TUYẾN TÀU</strong></span>
                </div>
            </div>
        </a>
    </div>
    <div id="TuyenXe" class="w3-container list" style="display:block">
        <div class="card-body">
            <div class="table-responsive px-5">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="background: #27619c;text-align:center;color:white;font-weight: bold;">
                            <td width="5%">#</td>
                            <td width="65%">Tuyến tàu</td>
                            <td width="20%">Cự li (km)</td>
                            <td width="10%">Chi tiết</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        @foreach ($tuyentau as $row)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $row->tuyen_ten }}</td>
                                <td>{{ $row->tuyen_culy }}</td>
                                {{-- <td>{{ $row->chitiettuyen_hanhtrinh }}</td> --}}
                                <td style="text-align:center">
                                    {{-- <input type="hidden" name="tuyen_id" id="tuyen_id" value="{{$row->tuyen_id}}"> --}}
                                    <a href="/gettuyenxetau/tuyentau?noidi={{ $row->tuyen_bendi }}&noiden={{ $row->tuyen_benden }}"
                                        style="border-radius: 50%;">
                                        <i class="fa fa-ship" style="color: #27619c"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#dataTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
