@extends('layouts.customer')
@section('content')
    <!-- Page Content -->
    <div class="container">

        {{-- form contact --}}
        <div class="main-contact" style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-md-2 col-md-offset-2">
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="pb-3" style="text-align: center;font-size:30px;color: #135190;">
                        <span><strong>LIÊN HỆ VỚI CHÚNG TÔI</strong></span>
                    </div>
                    <p>Bạn vui lòng điền đầy đủ thông tin. Chúng tôi sẽ liên hệ đến bạn sớm nhất có thể</p>
                    <form method="post" action="addFeedback" accept-charset="UTF-8" id="frm_contact" novalidate="novalidate"
                        class="bv-form">
                        <button type="submit" class="bv-hidden-submit"
                            style="display: none; width: 0px; height: 0px;"></button>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Họ và tên (*)" name="fullname" type="text"
                                        value="" data-bv-field="fullname">
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="fullname"
                                        data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa điền Họ và
                                        tên</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="text" value=""
                                        data-bv-field="email">
                                    <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email"
                                        data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa điền đúng định dạng
                                        email</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Số điện thoại (*)" name="phone" type="text"
                                        value="" data-bv-field="phone">
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone"
                                        data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa điền số điện
                                        thoại</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- <input class="form-control" placeholder="Fax" name="fax" type="text" value=""> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Địa chỉ" name="address" type="text" value="">
                        </div>
                        <div class="form-group">
                            <p>
                                {{-- <strong>Bạn cần liên hệ với:</strong> --}}
                            </p>
                            <div class="row">
                                {{-- @foreach ($department as $row)


                                <div class="col-md-6">
                                    <div class="checkbox checkbox-info">
                                        <input name="department" type="radio" value="{{$row->id}}" id="checkbox4"
                                            data-bv-field="department">
                                        <label for="checkbox4">{{$row->name}}</label>
                                    </div>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Nội dung (*)" rows="3" name="message" cols="50"
                                data-bv-field="message"></textarea>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="message"
                                data-bv-result="NOT_VALIDATED" style="display: none;">Bạn chưa điền nội dung</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">
                                <i class="fas fa-paper-plane"></i> Gửi
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-md-offset-2">
                </div>
            </div>
        </div>
        @if (session('alert'))

            <section class="alert alert-success">{{ session('alert') }}</section>

        @endif
        {{-- end form contact --}}

        <!-- Content Row -->
        <div class="card-header">
        </div>
        <div class="row pt-2">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62870.93986048326!2d105.0650021678154!3d9.980984010945217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0b6777d82c4e5%3A0x1d17987df166f133!2zQuG6v24gWGUgVOG7iW5oIEtpw6puIEdpYW5n!5e0!3m2!1svi!2s!4v1689067327266!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Contact Details Column -->

                <div class="col-lg-4 mb-4">
                    <h3>Chi tiết liên hệ:</h3>
                    <p>
                        Bến xe: Đường 2/9 - Kp3 - P.Tô Châu - Tp.Hà Tiên - T.Kiên Giang
                        <br>
                        Bến tàu: Đường Kim Dự - Kp1 - P.Tô Châu - Tp.Hà Tiên - T.Kiên Giang
                        <br>
                    </p>
                    <p>
                        <abbr title="Phone">Phone</abbr>:
                        <br>
                        02973.852.560(Bến Xe)
                        <br>
                        02973.850.551(Bến Tàu)
                    </p>
                    <p>
                        <abbr title="Email">Email</abbr>:
                        <a>bqlbxt.ht@kiengiang.gov.vn</a>
                    </p>
                    <p>
                        <abbr title="Hours">H</abbr>: Thứ 2 - Chủ nhật
                    </p>
                </div>

        </div>

    @endsection
