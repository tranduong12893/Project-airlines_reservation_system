@extends('front.layout.master')
@section('title', 'Thông tin đơn hàng')

@section('body')

    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="min-vh-100">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="user-profile mb-2">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active d-flex justify-content-start align-items-center text-dark" href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                            <span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex justify-content-start align-items-center text-dark" href="{{url('/member')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </svg>
                                            <span>Đơn hàng của tôi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form method="post" class="vmb-form-style" action="{{url('/update')}}">
                                @csrf
                                @method('PUT')
                                <span class="field-validation-valid message-error text-danger d-block" data-valmsg-for="UpdateProfileError" data-valmsg-replace="true"></span>
                                <input type="hidden" data-val="true" data-val-required="The Id field is required." id="Id" name="Id" value="203">
                                <div class="form-group">
                                    <label for="FullName">Họ tên</label>
                                    <input type="text" class="form-control" id="FullName" name="name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Số điện thoại</label>
                                    <input type="text" class="form-control" id="PhoneNumber" name="phone" value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Address">Địa chỉ</label>
                                        <input type="text" class="form-control" id="Address" name="address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="text" class="form-control" id="Email" name="email" value="{{ \Illuminate\Support\Facades\Auth::user()->email}}">
                                    <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                </div>

{{--                                <div class="icheck-material-orange">--}}
{{--                                    <input type="checkbox" value="false" data-val="true" data-val-required="The Thay đổi mật khẩu field is required." id="IsResetPassword" name="IsResetPassword">--}}
{{--                                    <label class="text-dark" for="IsResetPassword">Thay đổi mật khẩu</label>--}}
{{--                                </div>--}}
{{--                                <div class="d-none" id="password-field">--}}
{{--                                    <div class="form-group mt-3">--}}
{{--                                        <label for="Password">Mật khẩu</label>--}}
{{--                                        <input type="password" class="form-control" id="Password" name="Password">--}}
{{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="ConfirmPassword">Xác nhận mật khẩu</label>--}}
{{--                                        <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">--}}
{{--                                        <span class="text-danger field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-vmb register-button btn-warning my-3">Cập nhật thông tin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
