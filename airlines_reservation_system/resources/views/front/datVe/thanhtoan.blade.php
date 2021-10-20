@extends('front.layout.master')

@section('title', 'Thanh toán')

@section('body')
    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="container">
                {{--        <form class="vmb-form-style" action="/thanhcong">--}}
                <form action="/thanhcong">
                    <div class="ftl-flight-main">
                        @foreach($select as $v)
                            <div id="DC10804VJHANDAD310821VJDADHAN0909211001436460" class="ftl-flight-item ">
                                <ul class="ftl-flight-info">
                                    <li>
                                        <img src="https://ibe.vemaybay.vn/Resources/Images/Airline/vj.gif">
                                        <p>{{$v->hangmaybay}}     </p>
                                    </li>
                                    <li>
                                        <div class="ftl-flight-city">{{$v->diemxuatphat}}</div>
                                        <div class="ftl-flight-time">{{$v->giobay}}</div>
                                    </li>
                                    <li>
                                        <div class="ftl-flight-numb">{{$v->machuyenbay}}     </div>
                                        <div class="ftl-flight-line">
                                            <div class="ftl-flight-fly ftl-line"></div>
                                        </div>
                                        <a class="ftl-flight-detail">Chi tiết</a>
                                    </li>
                                    <li>
                                        <div class="ftl-flight-city">{{$v->diemden}}</div>
                                        <div class="ftl-flight-time">{{$v->giohacanh}}</div>
                                    </li>
                                    <li>
                                        <div class="ftl-flight-price">{{$v->gia}} <span>VND</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="loai" id="flexRadioDefault1"
                                           value="economy" onchange="this.form.submit({{route('show')}});"checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        economy
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="loai" id="flexRadioDefault2"
                                           value="promo" onchange="this.form.submit({{route('show')}});">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        promo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="loai" id="flexRadioDefault1"
                                           value="business" onchange="this.form.submit({{route('show')}});">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        business
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="loai" id="flexRadioDefault2"
                                           value="firstclass" onchange="this.form.submit({{route('show')}});">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        first class
                                    </label>
                                </div>
                                <div class="ftl-flight-box-detail"></div>
                            </div>
                        @endforeach

                    </div>
                    @csrf
                    <span class="field-validation-valid message-error text-danger my-4 d-block"
                          data-valmsg-for="SignUpError" data-valmsg-replace="true"></span>
                    <div class="form-group">
                        <label for="SignUpFullName">Họ và tên</label>
                        <input type="text" class="form-control" id="hoten" maxlength="400" name="name">
                        @error('name')
                        <div class="text-danger">
                            Vui lòng nhập họ tên
                        </div>
                        @enderror
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpFullName"
                              data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="SignUpEmail">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                        @error('email')
                        <div class="text-danger">
                            Vui lòng nhập email
                        </div>
                        @enderror
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpEmail"
                              data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="SignUpEmail">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="DOB">
                        @error('DOB')
                        <div class="text-danger">
                            Vui lòng nhập ngày sinh
                        </div>
                        @enderror
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpEmail"
                              data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="SignUpPhoneNumber">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" name="phone">
                        @error('phone')
                        <div class="text-danger">
                            Vui lòng nhập số điện thoại
                        </div>
                        @enderror
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber"
                              data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="SignUpPhoneNumber">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachi" name="address">
                        @error('address')
                        <div class="text-danger">
                            Vui lòng nhập địa chỉ
                        </div>
                        @enderror
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber"
                              data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group" >
                        <label for="SignUpPhoneNumber">Giới tính</label>
                        <div style="margin-left: 50px">
                            <label for="gioitinh">Nam</label>
                            <input type="radio" id="gioitinh" name="gender" value="nam"
                                   checked style="margin-left: 10px">
                        </div>
                        <div style="margin-left: 50px">
                            <label for="gioitinh">Nữ</label>
                            <input type="radio" id="gioitinh" name="gender" value="nu" style="margin-left: 21px">
                        </div>
                        <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber" data-valmsg-replace="true"></span>
                    </div>
{{--                    the--}}
{{--                    @foreach($select as $v)--}}
{{--                    <div class="form-group">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row" style="border: #ced4da solid 1px; border-radius: 2px">--}}
{{--                                 <!-- CREDIT CARD FORM STARTS HERE -->--}}
{{--                                    <div class="panel panel-default credit-card-box" style="margin: 10px 10px 10px 10px">--}}
{{--                                        <div class="panel-heading display-table">--}}
{{--                                            <div class="row display-tr">--}}
{{--                                                <h3 class="panel-title display-td">Thanh Toán</h3>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <label for="tien">Tổng thanh toán:<strong style="font-size: 20px"> {{$v->gia}} đồng</strong></label>--}}
{{--                                        </div>--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <form role="form" id="payment-form">--}}
{{--                                                <div style="margin-left: 20px" class="row">--}}
{{--                                                    <div class="col-xs-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="cardNumber">Số thẻ</label>--}}
{{--                                                            <div class="input-group">--}}
{{--                                                                <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />--}}
{{--                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div style="margin-left: 10px" class="row">--}}
{{--                                                    <div class="col-xs-7 col-md-7">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="cardExpiry"><span class="hidden-xs">NGÀY</span><span class="visible-xs-inline"> HẾT</span> HẠN</label>--}}
{{--                                                            <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-xs-5 col-md-5 pull-right">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="cardCVC">MÃ CV</label>--}}
{{--                                                            <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div style="margin-left: 20px" class="row">--}}
{{--                                                    <div class="col-xs-12">--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="couponCode">MÃ KHUYẾN MÃI</label>--}}
{{--                                                            <input type="text" class="form-control" name="couponCode" />--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- CREDIT CARD FORM ENDS HERE -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    het phan the--}}
                    <button type="submit" class="btn btn-block btn-vmb register-button btn-warning my-3">Mua vé
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
