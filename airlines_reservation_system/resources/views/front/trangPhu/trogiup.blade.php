@extends('front.layout.master')

@section('title', 'Hỗ trợ')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="vmb-helping py-4">
      <div class="container">
        <h1 class="m-0">Trợ giúp</h1>
      </div>
    </div>
    <div class="support-page">
      <div class="container">
        <div class="row mt-5 pt-0 pt-md-5">
          <div class="col-md-5">
            <h3 class="vmb-help-border-bt">Các câu hỏi thường gặp</h3>
            <div class="vmb-sppage-answer">
              <p>Trước khi VEMAYBAY.VN chia sẻ một vài thông tin cơ bản nhất khi đi máy bay thì bạn bạn cần lưu ý rằng:&nbsp;<strong>Không phải mọi thông tin trong này đều đúng với mọi trường hợp, mọi thời điểm</strong>, vì vậy bạn nên kiểm tra lại với đại lý bán vé, hãng hàng không hoặc qua VEMAYBAY.VN trường hợp của bạn nếu có những thông tin chính xác nhất.</p>
            </div>
            <div class="py-2">
              <div class="border rounded">
                <div class="p-2 sppage-banner text-nowrap overflow-hidden">
                  <img class="pr-2" src="{{asset('front/img/trangchu/Ticket1.png')}}">
                  <b><a href="javascript:void 0" class="text-body text-nowrap" title="I. Đặt chỗ và mua vé">I. Đặt chỗ và mua vé</a></b>
                </div>
              </div>
            </div>
            <div class="py-2">
              <div class="border rounded">
                <div class="p-2 sppage-banner text-nowrap overflow-hidden">
                  <img class="pr-2" src="{{asset('front/img/trangchu/Card.png')}}">
                  <b><a href="javascript:void 0" class="text-body text-nowrap" title="II. Thanh toán vé">II. Thanh toán vé</a></b>
                </div>
              </div>
            </div>
            <div class="py-2">
              <div class="border rounded">
                <div class="p-2 sppage-banner text-nowrap overflow-hidden">
                  <img class="pr-2" src="{{asset('front/img/trangchu/Luggage2.png')}}">
                  <b><a href="javascript:void 0" class="text-body text-nowrap" title="III. Quy định về hành lý">III. Quy định về hành lý</a></b>
                </div>
              </div>
            </div>
            <div class="py-2">
              <div class="border rounded">
                <div class="p-2 sppage-banner text-nowrap overflow-hidden">
                  <img class="pr-2" src="{{asset('front/img/trangchu/Passport.png')}}">
                  <b><a href="javascript:void 0" class="text-body text-nowrap" title="IV. Giấy tờ tùy thân khi đi máy bay">IV. Giấy tờ tùy thân khi đi máy bay</a></b>
                </div>
              </div>
            </div>
            <div class="py-5">
              <div class="border rounded p-3">
                <div class="f-flex flex-row">
                  <div class="sppage-border-content">Chủ đề của bạn không được liệt kê ?</div>
                  <div class="sppage-border-content">Nhận trợ giúp thêm tại đây</div>
                </div>
                <div class="register d-flex pt-3">
                  <div class="search-box">
                    <input type="text" name="textSearch" class="footer-input-search border-bottom vmb-border-color" placeholder="Chúng tôi có thể giúp gì cho bạn">
                    <span class="fas fa-search search-icon text-light"></span>
                  </div>
                </div>
                <div class="sppage-border-content-one pt-4">Bạn cần hỗ trợ thêm? vui lòng liên hệ trực tiếp với chúng tôi</div>
                <div class="d-flex flex-row pt-4">
                  <img src="{{asset('front/img/trangchu/IconBluePhone.png')}}"><div class="d-flex flex-column pl-3">
                  <span class="vmb-sppage-title-hotline">Hotline</span>
                  <b class="vmb-sppace-hotline">0932 126 988</b>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <h4>1. Tôi có thể đặt chỗ, mua vé máy bay trên website vemaybay.vn cho trẻ em dưới 2 tuổi được không?</h4>
            <p><span style="font-size:14px">Quý khách có thể đặt chỗ, mua vé cho trẻ em dưới 2 tuổi ngồi chung ghế với người lớn. Tuổi trẻ em dưới 2
                tuổi được tính đến ngày khởi hành chặng bay đầu tiên đối với hành trình hoàn toàn do các hãng hàng không khai thác, tính đến
                ngày khởi hành chặng bay cuối cùng đối với hành trình có chặng bay do hãng hàng không khác khai thác. Quý khách có thể được
                yêu cầu mua vé mới hoặc bị từ chối chuyên chở nếu mua vé không đúng quy định trên.</span></p>
            <h4>2. Làm thế nào để chọn được giá tốt nhất khi mua vé máy bay trên website của Vemaybay.vn?</h4>
            <p><span style="font-size:14px">Khi tìm kiếm chuyến bay trên website của Vietnam Airlines, hệ thống luôn hiển thị thông tin từ mức giá thấp
                nhất còn chỗ để Quý khách dễ dàng lựa chọn.Quý khách tham khảo chi tiết về các loại giá vé máy bay và điều kiện áp dụng.</span></p>
            <h4>3. Tôi có thể đặt chỗ, mua vé máy bay trên website của Vemaybay.vn cho các chuyến bay nào?</h4>
            <p><span style="font-size:14px">Quý khách có thể đặt chỗ, mua vé trên các chuyến bay nội địa, quốc tế do tất cả các hãng Hàng không khai thác.</span></p>
            <h4>4. Tôi có thể đặt chỗ, mua vé máy bay tren website của Vemaybay.vn cho bà bầu và trẻ em từ 2 đến dưới 12 tuổi được không?</h4>
            <p><span style="font-size:14px">Quý khách có thể đặt chỗ, mua vé cho trẻ em từ 2 đến dưới 12 tuổi trong cùng giao dịch mua vé (hồ sơ đặt chỗ) với
                người lớn.</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
