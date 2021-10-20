@extends('front.layout.master')

@section('title', 'Đăng ký')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="container py-5">
      <div style="min-height:75vh" class="row justify-content-center align-items-center">
        <div class="col-md-4 text-center">
          <img src="{{asset('front/img/dangky/register.png')}}" alt="">
          <div class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at odio id odio gravida pellentesque. Curabitur quis augue quis lorem tincidunt vestibulum sit amet massa.</div>
        </div>
        <div class="col-md-6 offset-md-2">
          <form method="post" class="vmb-form-style" action="{{url('/register')}}">
              @csrf
            <div class="customer-form-signup-title mb-3">Đăng kí</div>
            <span class="field-validation-valid message-error text-danger my-4 d-block" data-valmsg-for="SignUpError" data-valmsg-replace="true"></span>
            <div class="form-group">
              <label for="SignUpFullName">Họ và tên</label>
              <input type="text" class="form-control" id="hoten" maxlength="400" name="name">
                @error('name')
                <div class="text-danger">
                    Vui lòng nhập họ tên
                </div>
                @enderror
              <span class="text-danger field-validation-valid" data-valmsg-for="SignUpFullName" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
              <label for="SignUpEmail">Email</label>
              <input type="text" class="form-control" id="email" name="email">
                @error('email')
                <div class="text-danger">
                    Vui lòng nhập email
                </div>
                @enderror
              <span class="text-danger field-validation-valid" data-valmsg-for="SignUpEmail" data-valmsg-replace="true"></span>
            </div>
              <div class="form-group">
                  <label for="SignUpEmail">Ngày sinh</label>
                  <input type="date" class="form-control" id="ngaysinh" name="DOB">
                  @error('DOB')
                  <div class="text-danger">
                      Vui lòng nhập ngày sinh
                  </div>
                  @enderror
                  <span class="text-danger field-validation-valid" data-valmsg-for="SignUpEmail" data-valmsg-replace="true"></span>
              </div>
              <div class="form-group">
                  <label for="SignUpPhoneNumber">Số điện thoại</label>
                  <input type="text" class="form-control" id="sdt" name="phone">
                  @error('phone')
                  <div class="text-danger">
                      Vui lòng nhập số điện thoại
                  </div>
                  @enderror
                  <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber" data-valmsg-replace="true"></span>
              </div>
              <div class="form-group">
                  <label for="SignUpPhoneNumber">Địa chỉ</label>
                  <input type="text" class="form-control" id="diachi" name="address">
                  @error('address')
                  <div class="text-danger">
                      Vui lòng nhập địa chỉ
                  </div>
                  @enderror
                  <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber" data-valmsg-replace="true"></span>
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
{{--                  <div class="form-check">--}}
{{--                      <input class="form-check-input form-control" type="radio" value="Nam" id="gioitinh" name="gender">--}}
{{--                      <label class="form-check-label" for="flexCheckDefault">--}}
{{--                         Nam--}}
{{--                      </label>--}}
{{--                  </div>--}}
{{--                  <div class="form-check">--}}
{{--                      <input class="form-check-input form-control" type="radio" value="Nu" id="gioitinh" name="gender">--}}
{{--                      <label class="form-check-label" for="flexCheckChecked">--}}
{{--                          Nữ--}}
{{--                      </label>--}}
{{--                  </div>--}}
                  <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPhoneNumber" data-valmsg-replace="true"></span>
              </div>
          <div class="form-group">
            <label for="SignUpPassword">Mật khẩu</label>
            <input type="password" class="form-control" id="matkhau" name="password">
              @error('name')
              <div class="text-danger">
                  Vui lòng nhập mật khẩu
              </div>
              @enderror
            <span class="text-danger field-validation-valid" data-valmsg-for="SignUpPassword" data-valmsg-replace="true"></span>
          </div>
            <div class="form-group">
              <label for="SignUpComfirmPassword">Xác nhận mật khẩu</label>
              <input type="password" class="form-control" id="SignUpComfirmPassword" name="SignUpConfirmPassword">
                @error('name')
                <div class="text-danger">
                    Xác nhận mật khẩu
                </div>
                @enderror
              <span class="text-danger field-validation-valid" data-valmsg-for="SignUpComfirmPassword" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group mt-4">
              <div class="icheck-material-orange setting-field is-round-trip subscribe-email">
                <input type="checkbox" checked="" data-val="true" data-val-required="The Nhận email thông tin và ưu đãi field is required." id="SubscribeEmail" name="SubscribeEmail" value="true">
                <label for="SubscribeEmail">Tôi đồng ý với các điều khoản và điều kiện</label>
              </div>
            </div>
            <div class="d-flex justify-content-end mt-3 align-items-end">
              <div class="d-flex flex-column w-50">
                <div class="note">Bằng việc nhấn Đăng ký, bạn đã đồng ý với điều khoản sử dụng của Vemaybay.vn</div>
                <button type="submit" class="btn btn-block btn-vmb register-button btn-warning my-3">Đăng ký</button>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
