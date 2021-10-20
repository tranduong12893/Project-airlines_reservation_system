@extends('front.layout.master')

@section('title', 'Liên hệ')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="vmb-help-page">
      <div class="vmb-helping py-4">
        <div class="container">
          <h1 class="m-0">Liên hệ</h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex justify-content-between mt-5">
              <div class="d-flex flex-column">
                                <span class="vmb-help-phone-title">
                                    <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">
                                    Hotline
                                </span>
                <p class="m-0 vmb-help-phone-number font-weight-bolder">0932 126 988</p>
              </div>
              <div class="d-flex flex-column">
                                <span class="vmb-help-phone-title">
                                    <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">
                                    Điện thoại
                                </span>
                <p class="m-0 vmb-help-phone-number font-weight-bolder">(028) 38 256 256
                </p>
              </div>
            </div>
            <div class="d-none d-md-block">
              <div class="rounded my-4 third-party">
                <div class="d-flex justify-content-between p-3">
                  <div>
                    <p class="font-weight-bolder">Đối tác khách sạn</p>
                    <b class="vmb-help-border-content pt-2 pb-2">
                      Niêm yết khách sạn của bạn trên vemaybay.vn và kết nối với hàng triệu du khách
                      trên toàn thế giới!
                    </b>
                    <div class="my-2">
                      <a href="#">Đăng ký ngay</a>
                    </div>
                  </div>
                  <div style="border-right:2px solid #c4c4c4" class="mr-3"></div>
                  <div>
                    <p class="font-weight-bolder">Báo chí &amp; Đối tác truyền thông</p>
                    <b class="vmb-help-border-content pt-2 pb-2">
                      Nếu bạn là đại diện cơ quan truyền thông, vui lòng gửi yêu cầu đến pr@vemaybay.vn
                    </b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="vmb-help mt-5">
              <form action="/lien-he" method="post" class="needs-validation">
                <div>
                  <h3 class="vmb-help-border-bt">Chi tiết</h3>
                </div>
                <div class="vmb-help-ready-title">
                  Vui lòng để lại lời nhắn, chúng tôi sẽ phản hồi cho bạn trong thời gian sớm nhất
                </div>
                <div class="register">
                  <label class="register-label">Tên của bạn</label>
                  <input type="text" name="fullName" class="form-control rounded-0 border-0 px-0">
                </div>
                <div class="register">
                  <label class="register-label">Số điện thoại</label>
                  <input type="text" name="phoneNumber" class="form-control rounded-0 border-0 px-0">
                </div>
                <div>
                  <label class="register-label">Nội dung</label>
                  <textarea rows="5" name="message" class="form-control rounded-0"></textarea>
                </div>
                <div class="d-flex justify-content-end my-3">
                  <button class="btn btn-warning btn-vmb btn-block" type="submit">Gởi</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <h3 class="vmb-help-border-bt my-3">Địa chỉ văn phòng</h3>
        <div class="row">
          <div class="col-md-6">
            <nav class="nav flex-column">
              <a href="javascrip:void(0);" title="Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh"
                 class="nav-link address-item pl-0 text-dark font-weight-bolder">
                Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh
              </a>
              <a href="javascrip:void(0);" title="Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh"
                 class="nav-link address-item pl-0 text-dark font-weight-bolder">
                Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh
              </a>
              <a href="javascrip:void(0);" title="Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm"
                 class="nav-link address-item pl-0 text-dark font-weight-bolder">
                Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm
              </a>
              <a href="javascrip:void(0);" title="Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng"
                 class="nav-link address-item pl-0 text-dark font-weight-bolder">
                Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng
              </a>
            </nav>
          </div>
          <div class="col-md-6">
            <nav class="nav flex-column">
            </nav>
          </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9 my-3">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1099.8148051389157!2d106.69608889127295!3d10.78875316046777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f34c509ba57%3A0xdcd07b0708f419cb!2zMTQ1IMSQaeG7h24gQmnDqm4gUGjhu6csIMSQYSBLYW8sIFF14bqtbiAxLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1579694716876!5m2!1svi!2s"
                  width="600" height="450" frameborder="0" style="border:0" allowfullscreen="">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
