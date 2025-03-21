@extends('layouts.admin')
@section('content')
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <a href="#"><span class="text-uppercase page-subtitle">tuyến tàu</span></a>
    </div>
</div>
<!-- End Page Header -->
<div class="main-content-container container-fluid px-4">
    <nav class="col-6">
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                Tuyến tàu
            </a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
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
            <table class="table">
              <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="25%">Mã Tuyến</th>
                    <th width="50%">Tuyến chạy</th>
                    <th width="15%">Cự ly</th>
                    {{-- <th width="10%" class="text-center">Chi tiết</th> --}}
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <a href="tuyenvantai/ABC1" type="button">
                            ABC1
                        </a>
                    </td>
                    <td>Rạch Giá - Sài Gòn</td>
                    <td>300 Km</td>
                    {{-- <td class="text-center">
                        <a href="#">
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
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('div li, aside').removeClass('active');
        $('#tuyenvantai').addClass('active');
    })
</script>
@endsection