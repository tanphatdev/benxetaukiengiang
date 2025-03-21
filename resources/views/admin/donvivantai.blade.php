@extends('layouts.admin')
@section('content')
    <div class="main-content-container container-fluid px-4 ">
        <nav class="col-6">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="manager/donvivantai/2"
                    role="tab" aria-controls="nav-home" aria-selected="true">
                    Đơn vị vận tải Tàu
                </a>
                <a class="nav-item nav-link btn" id="tab_donvivantaixe" data-toggle="tab"
                    role="tab" aria-controls="nav-contact" aria-selected="false">
                    Đơn vị vận tải Xe
                </a>
            </div>
        </nav>
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                {{-- <span class="text-uppercase page-subtitle">Overview</span> --}}
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="card container">
            <div class="card-header border-bottom">
            <button class="btn btn-success">Thêm đơn vị</button> 
          </div>
            <div class="card-body p-0 pb-3 mt-2">
                <table id="myTable" class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="20%">Tên đơn vị</th>
                            <th width="15%">Số điện thoại</th>
                            <th width="50%">Địa chỉ</th>
                            <th width="10%" class="text-center">Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- @foreach ($donvivantai as $row)
                            <tr>
                                <td>1</td>
                                <td>{{ $row->donvikinhdoanh_ten }}</td>
                                <td>{{ $row->donvikinhdoanh_sdt }}</td>
                                <td>{{ $row->donvikinhdoanh_diachi }}</td>
                                <td class="text-center">
                                    <a type="submit">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach --}}

                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Default Light Table -->
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // var table = $('#myTable').DataTable();
            $('div li, aside').removeClass('active');
            $('#donvivantai').addClass('active');
            getdonvivantaitau();
            
            $("#tab_donvivantaixe").on('click',function(){
                // $("#myTable").ajax.reload();
                // $("#myTable").clear();
                getdonvivantaixe();
                
                
            })

            $datatable = $("#myTable").DataTable({
            ajax({
                type: 'GET',
                url: "/manager/donvivantai/get_donvivantaixe",
                dataType: 'json',
                success: function(value) {
                    console.log(value)
                    data: value
                    columns: [{
                                data: 'donvikinhdoanh_id'
                            },
                            {
                                data: 'donvikinhdoanh_ten'
                            },
                            {
                                data: 'donvikinhdoanh_sdt'
                            },
                            {
                                data: 'donvikinhdoanh_diachi'
                            },
                                data: "donvikinhdoanh_id",
                                "render": function(data, type, row, meta) {
                                    return '<button class="btn btn-primary" data-id="' + data +
                                        '" onclick="deleteThis(event)">Xem</button>'
                                
                            }

                        ]
                }
                });
            });
        })

        function getdonvivantaixe(){
            // $("#myTable").DataTable().clear().draw();
            // $("#myTable").DataTable().ajax().reload();
            // var table = $('#myTable').DataTable();
            // table.ajax.reload();
            $("#myTable").DataTable().clear().draw();
            $.ajax({
                type: 'GET',
                url: "/manager/donvivantai/get_donvivantaixe",
                dataType: 'json',
                success: function(value) {
                    console.log(value)
                $('#myTable').DataTable({
                        // responsive: true,
                        // dataSrc: value,
                        data: value,
                        columns: [{
                                data: 'donvikinhdoanh_id'
                            },
                            {
                                data: 'donvikinhdoanh_ten'
                            },
                            {
                                data: 'donvikinhdoanh_sdt'
                            },
                            {
                                data: 'donvikinhdoanh_diachi'
                            },
                                data: "donvikinhdoanh_id",
                                "render": function(data, type, row, meta) {
                                    return '<button class="btn btn-primary" data-id="' + data +
                                        '" onclick="deleteThis(event)">Xem</button>'
                                
                            }

                        ]
                    });
                },
            });
        }
        function getdonvivantaitau(){
            console.log('adasđá')
            // $("#myTable").DataTable().ajax().reload();
            // var table = $('#myTable').DataTable();
            // table.ajax.reload();
            $.ajax({
                type: 'GET',
                url: "/manager/donvivantai/get_donvivantaitau",
                dataType: 'json',
                success: function(value) {
                    console.log(value)
                $("#myTable").DataTable().clear();
                $('#myTable').DataTable({
                        // responsive: true,
                        // dataSrc: value,
                        data: value,
                        columns: [{
                                data: 'donvikinhdoanh_id'
                            },
                            {
                                data: 'donvikinhdoanh_ten'
                            },
                            {
                                data: 'donvikinhdoanh_sdt'
                            },
                            {
                                data: 'donvikinhdoanh_diachi'
                            },
                            {
                                data: "donvikinhdoanh_id",
                                "render": function(data, type, row, meta) {
                                    return '<button class="btn btn-primary" data-id="' + data +
                                        '" onclick="deleteThis(event)">Xem</button>'
                                }
                            }

                        ]
                    });
                },
                
            });
            
        }



        function deleteThis(e) {
            console.log(e.target.getAttribute('data-id'))
        }
    </script>
@endsection
