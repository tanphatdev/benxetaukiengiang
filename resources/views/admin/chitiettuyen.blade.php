@extends('layouts.admin')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <a href="#"><span class="text-uppercase page-subtitle">tuyến tàu</span></a><span
                class="text-uppercase page-subtitle"> / chi tiết tuyến tàu</span></a>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="main-content-container container-fluid px-4">
        <nav class="col-6">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true">
                    Tuyến tàu
                </a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                    aria-controls="nav-contact" aria-selected="false">
                    Tuyến xe
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
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    {{-- <div class="card-header border-bottom">
            <h6 class="m-0">Active Users</h6>
          </div> --}}
                    <div class="card-body p-0 pb-3 ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%" class="text-center">#</th>
                                    <th width="30%" class="text-center">Tên đơn vị</th>
                                    <th width="20%" class="text-center">Số điện thoại</th>
                                    <th width="15%" class="text-center">Cự ly</th>
                                    <th width="30%" class="text-center">Giờ chạy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>
                                        <a type="button" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" title="Click để chỉnh sửa">
                                            CÔNG TY CỔ PHẦN VẬN TẢI BIỂN HÒA BÌNH
                                        </a>
                                    </td>
                                    <td class="text-center">02973996868</td>
                                    <td>20 km</td>
                                    <td class="text-center ">
                                        <div class="row">
                                            <span class="time col-2">00:00</span>
                                            <span class="time col-2">06:00</span>
                                            <span class="time col-2">07:00</span>
                                            <span class="time col-2">07:15</span>
                                            <span class="time col-2">07:30</span>
                                            <span class="time col-2">07:45</span>
                                            <span class="time col-2">08:00</span>
                                            <span class="time col-2">08:05</span>
                                            <span class="time col-2">08:15</span>
                                            <span class="time col-2">08:30</span>
                                            <span class="time col-2">08:31</span>
                                            <span class="time col-2">08:45</span>
                                            <span class="time col-2">08:50</span>
                                            <span class="time col-2">09:20</span>
                                            <span class="time col-2">09:30</span>
                                            <span class="time col-2">10:00</span>
                                            <span class="time col-2">11:01</span>
                                            <span class="time col-2">12:00</span>
                                            <span class="time col-2">13:00</span>
                                        </div>
                                    </td>
                                    {{-- <td class="text-center">
                        <a type="submit">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                        </a>
                    </td> --}}
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-row container ">
                            <select class="custom-select custom-select-sm col-md-2">
                                <option selected="">Hiển thị 10 </option>
                                <option>Hiển thị 20 </option>
                                <option>Hiển thị 50 </option>
                                <option>Hiển thị 100 </option>
                            </select>
                            <nav aria-label="Page navigation example" class="form-group col-md-10">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header card-header border-bottom">
                    <h6 class="m-0">CÔNG TY CỔ PHẦN VẬN TẢI BIỂN HÒA BÌNH</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="custom-control custom-checkbox mb-1 col-2">
                            <input type="checkbox" class="custom-control-input" id="1">
                            <label class="custom-control-label" for="1">06:00</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 col-2">
                            <input type="checkbox" class="custom-control-input" id="2">
                            <label class="custom-control-label" for="2">07:00</label>
                        </div>
                        {{-- <a type="button"><span class="time">06:00</span><i class="fa fa-minus" aria-hidden="true"></i></a> --}}
                        <div class="custom-control custom-checkbox mb-1 col-2 ">
                            <input type="checkbox" class="custom-control-input" id="3">
                            <label class="custom-control-label" for="3">07:15</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 col-2 ">
                            <input type="checkbox" class="custom-control-input" id="4">
                            <label class="custom-control-label" for="4">07:30</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 col-2">
                            <input type="checkbox" class="custom-control-input" id="5">
                            <label class="custom-control-label" for="5">07:45</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 col-2">
                            <input type="checkbox" class="custom-control-input" id="6">
                            <label class="custom-control-label" for="6">08:00</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-1 col-2">
                            <input type="checkbox" class="custom-control-input" id="7">
                            <label class="custom-control-label" for="7">08:05</label>
                        </div>
                        {{-- <span class="time col-2">08:05</span>
                        <span class="time col-2">08:15</span>
                        <span class="time col-2">08:30</span>
                        <span class="time col-2">08:31</span>
                        <span class="time col-2">08:45</span>
                        <span class="time col-2">08:50</span>
                        <span class="time col-2">09:20</span>
                        <span class="time col-2">09:30</span>
                        <span class="time col-2">10:00</span>
                        <span class="time col-2">11:01</span>
                        <span class="time col-2">12:00</span>
                        <span class="time col-2">13:00</span> --}}
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Xóa</button>
                </div>

            </div>
        </div>
    </div>
@endsection
