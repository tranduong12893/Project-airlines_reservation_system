@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="vmb-homepage-booking-place">
                <div class="container py-5">
                    <div class="vmb-booking-ticket">
                        <form action="{{ route('Search') }}">
                            <div class="col-md-12 vmb-search">
                                <div class="container main">
                                    <div style="border-bottom: #ffa300 solid 2px; width: 150px">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="30" height="30"
                                             viewBox="0 0 172 172"
                                             style=" color:#ffa300;fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffa300"><path d="M42.98656,161.58594c-2.45906,0 -3.70875,-1.27656 -4.23281,-2.0425c-0.67187,-0.98094 -1.29,-2.66062 -0.36281,-5.14656c0.84656,-2.23063 15.54719,-38.02813 20.9625,-51.19688h-36.50969l-8.93594,17.17313c-1.58563,3.10406 -3.42656,3.42656 -7.00094,3.46687h-2.44563c-1.41094,0 -2.6875,-0.57781 -3.50719,-1.59906c-0.83313,-1.00781 -1.12875,-2.33812 -0.81969,-3.73562c0.29563,-1.43781 5.71094,-27.82906 6.665,-32.49188c-2.09625,-9.91687 -6.58438,-31.32281 -6.73219,-32.92187c-0.16125,-1.80063 0.49719,-2.94281 1.08844,-3.58781c0.80625,-0.88687 1.92156,-1.34375 3.30562,-1.34375h2.41875c1.505,0.04031 5.29438,0.13438 7.02781,3.46688l8.93594,17.17312h36.50969c-5.41531,-13.16875 -20.11594,-48.96625 -20.9625,-51.19687c-0.92719,-2.4725 -0.3225,-4.16563 0.36281,-5.13313c0.52406,-0.76594 1.78719,-2.05594 4.23281,-2.05594l0.63156,0.02687c1.24969,0.1075 5.10625,0.48375 8.08937,0.81969c3.655,0.40312 5.18688,2.33812 6.02,3.38625c0.79281,0.9675 35.81094,45.64719 42.47594,54.15312h50.24281c15.14406,0 21.55375,12.30875 21.55375,17.2c0,4.89125 -6.40969,17.2 -21.55375,17.2h-50.24281c-7.48469,9.55406 -41.66969,53.17219 -42.32812,53.97844c-0.9675,1.22281 -2.51281,3.15781 -6.16781,3.56094c-2.98312,0.33594 -6.85312,0.71219 -8.08937,0.81969zM42.98656,154.73281l0.01344,3.41312l0.01344,-3.44c-0.01344,0 -0.02687,0 -0.02687,0z"></path></g></g><span style="font-size: 20px;color: #ffa300"> vé máy bay </span></svg>
                                    </div>
                                    <br>
                                    <div class="btn-group" role="group">
                                        <div>
                                            <input type="radio" name="journeyOption" id="oneWayJourney" checked onchange="disableReturn();"></input>
                                            <label for="oneWayJourney">Một chiều</label>
                                        </div>
                                        <div style="margin-left: 20px">
                                            <input type="radio" name="journeyOption" id="returnJourney" onchange="enableReturn();"></input>
                                            <label for="oneWayJourney">Khứ hồi</label>
                                        </div>

                                    </div>
                                    <br><br>
                                    <div class="maincontent">
                                        <div class="row" style="margin-left: 70px">
                                            <div class=" abc" style="border-bottom: #ffa300 solid 2px; width: 250px">
                                                <p> Điểm đi </p>
                                                <input name="diemdi" type="text" placeholder="Mã thành phố"
                                                       style="
                                                       border: none;
                                                       color:#333333;
                                                       font-family:SF;
                                                       font-size:18px;
                                                       line-height:27px;
                                                       padding:1px 2px">
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="col-xm-5 abc"style="border-bottom: #ffa300 solid 2px; margin-left: 70px; width: 250px">
                                                <p> Điểm đến </p>
                                                <input name="diemden" type="text" placeholder="Mã thành phố"
                                                       style="
                                                       border: none;
                                                       color:#333333;
                                                       font-family:SF;
                                                       font-size:18px;
                                                       line-height:27px;
                                                       padding:1px 2px">
                                                <i class="fa fa-angle-down"></i>
                                            </div>
                                            <div class="col-xm-5" style="width: 320px;">
                                                <div style="width: 120px;margin-left: 70px">
                                                    <p style="text-align: center"> Người lớn </p>
                                                    <div class="buttons_added" style="margin-left: 15px;width: 100px">
                                                        <input class="minus is-form" type="button" value="-">
                                                        <input aria-label="quantity" class="input-qty" max="9" min="0" name="points" type="number" value="1" style="text-align: center;width: 30px">
                                                        <input class="plus is-form" type="button" value="+">
                                                    </div>
{{--                                                    <input type="number" name="points" min="0" max="9" step="1" value="1    " style="text-align: center">--}}
                                                </div>

                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row form-group" style="margin-left: 70px" >
                                            <div style="border-bottom: #ffa300 solid 2px;width: 250px">
                                                <p> Ngày đi</p>
                                                <input name="ngaydi" id="departureDate" class="glyphicon glyphicon-calendar" type="date" placeholder="dd/mm/yyyy"
                                                       style="
                                                       border: none;
                                                       color:#333333;
                                                       font-size:18px;
                                                       line-height:27px;
                                                       padding:1px 2px">
                                            </div>
                                            <div style="border-bottom: #ffa300 solid 2px; margin-left: 70px; width: 250px">
                                                <p> Ngày về </p>
                                                <input name="ngayve" id="returnDate" disabled="disabled" class="glyphicon glyphicon-calendar" type="date" placeholder="dd/mm/yyyy"
                                                       style="
                                                       border: none;
                                                       color:#333333;
                                                       font-size:18px;
                                                       line-height:27px;
                                                       padding:1px 2px">
                                            </div>
                                            <div style=" width: 120px;margin-left: 70px">
                                                <p style="text-align: center"> Trẻ em </p>
                                                <div class="buttons_added" style="margin-left: 15px;width: 100px">
                                                    <input class="minus is-form" type="button" value="-">
                                                    <input aria-label="quantity" class="input-qty" max="9" min="0" name="points" type="number" value="0" style="text-align: center;width: 30px">
                                                    <input class="plus is-form" type="button" value="+">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-warning" >Tìm kiếm Chuyến Bay</button>
                                        <br><br>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="vmb-href-choose-place py-4">
                    <div class="row">
                        <div class="col-md-3 my-2 my-md-0">
                            <div class="vmb-href py-1 d-flex justify-content-between align-items-center">
                                <a href="javascript:void 0" class="text-body font-weight-bolder">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Quản lý đặt chỗ</span>
                                </a>
                                <i class="ti-angle-down d-inline-block d-md-none"></i>
                            </div>
                        </div>
                        <div class="col-md-3 my-2 my-md-0">
                            <div class="vmb-href py-1 d-flex justify-content-between align-items-center">
                                <a href="{{url('/camnang')}}" class="text-body font-weight-bolder" title="Cẩm nang du lịch">
                                    <i class="fas fa-book"></i>
                                    <span>Cẩm nang du lịch</span>
                                </a>
                                <i class="ti-angle-down d-inline-block d-md-none"></i>
                            </div>
                        </div>
                        <div class="col-md-3 my-2 my-md-0">
                            <div class="vmb-href py-1 d-flex justify-content-between align-items-center">
                                <a href="{{url('/ctkhuyenmai')}}" class="text-body font-weight-bolder" title="Khuyến mãi">
                                    <i class="fas fa-tag"></i>
                                    <span>Khuyến mãi</span>
                                </a>
                                <i class="ti-angle-down d-inline-block d-md-none"></i>
                            </div>
                        </div>
                        <div class="col-md-3 my-2 my-md-0">
                            <div class="vmb-href py-1 d-flex justify-content-between align-items-center">
                                <a href="{{url('/diemDenYeuThich')}}" class="text-body font-weight-bolder" title="Điểm đến yêu thích">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Điểm đến yêu thích</span>
                                </a>
                                <i class="ti-angle-down d-inline-block d-md-none"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vmb-banner py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 my-2">
                            <div class="banner-item position-relative">
                                <img src="front/img/trangchu/resize.jpg" alt="vemaybay.vn" class="img-fluid" title="vemaybay.vn">
                                <div class="banner-item-desc w-100 position-absolute p-3 text-right">
                                    <h1 class="text-light" title="vemaybay.vn">vemaybay.vn</h1>
                                    <a href="javascript:" class="btn btn-outline-light" title="vemaybay.vn">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-2">
                            <div class="banner-item position-relative">
                                <img src="front/img/trangchu/resize-31298732.png" alt="Ưu Đãi Nâng Hạng Dành Cho Khách Hàng Thân Thiết" class="img-fluid" title="Ưu Đãi Nâng Hạng Dành Cho Khách Hàng Thân Thiết">
                                <div class="banner-item-desc w-100 position-absolute p-3 text-right">
                                    <h1 class="text-light" title="Ưu Đãi Nâng Hạng Dành Cho Khách Hàng Thân Thiết">Ưu Đãi Nâng Hạng Dành Cho Khách Hàng Thân Thiết</h1>
                                    <a href="javascript:" class="btn btn-outline-light" title="Ưu Đãi Nâng Hạng Dành Cho Khách Hàng Thân Thiết">Tìm hiểu thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pt-5 my-3">
                    <div class="row favorite">
                        <div class="col-md-12">
                            <h1 class="m-0 favorite-title">Điểm đến yêu thích</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="nav" id="myTab" role="tablist">
                    <li class="nav-item p-0 booking-type-tab">
                        <a data-toggle="tab" role="tab" href="#ve-may-bay" class="nav-link p-0 pr-4 hover_yellow active" title="Vé máy bay">
                            <span class="border-bottom">Vé máy bay</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ve-may-bay" role="tabpanel" aria-labelledby="2-tab">
                        <div class="py-3 row">
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Hà Nội - Sài Gòn: 1,768,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-01.png" alt="Sài Gòn - Hà Nội - Sài Gòn" title="Sài Gòn - Hà Nội - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Hà Nội - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>1,768,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Đà Nẵng - Sài Gòn: 1,108,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-02.png" alt="Sài Gòn - Đà Nẵng - Sài Gòn" title="Sài Gòn - Đà Nẵng - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Đà Nẵng - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>1,108,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Phú Quốc - Sài Gòn: 2,884,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-03.png" alt="Sài Gòn - Phú Quốc - Sài Gòn" title="Sài Gòn - Phú Quốc - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Phú Quốc - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>2,884,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Singapore - Sài Gòn: 2,884,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-04.png" alt="Sài Gòn - Singapore - Sài Gòn" title="Sài Gòn - Singapore - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Singapore - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>2,884,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - TaiPei - Sài Gòn: 3,173,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-05.png" alt="Sài Gòn - TaiPei - Sài Gòn" title="Sài Gòn - TaiPei - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - TaiPei - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>3,173,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Korea - Sài Gòn: 5,094,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-06.png" alt="Sài Gòn - Korea - Sài Gòn" title="Sài Gòn - Korea - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Korea - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0"><i class="vmb-small-word pr-2">Từ</i>5,094,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Paris - Sài Gòn: 17,744,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-07.png" alt="Sài Gòn - Paris - Sài Gòn" title="Sài Gòn - Paris - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Paris - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>17,744,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - Los Angeles - Sài Gòn: 17,980,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-08.png" alt="Sài Gòn - Los Angeles - Sài Gòn" title="Sài Gòn - Los Angeles - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - Los Angeles - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>17,980,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 my-3">
                                <a href="javascript:" class="favorite-item text-body d-flex align-items-center justify-content-between" title="Sài Gòn - MelBourne - Sài Gòn: 12,993,000đ*">
                                    <div>
                                        <img class="img-fluid favorite-item-thumbnail" src="front/img/trangchu/DESTINATION-09.png" alt="Sài Gòn - MelBourne - Sài Gòn" title="Sài Gòn - MelBourne - Sài Gòn">
                                    </div>
                                    <div class="ml-2 d-flex flex-column flex-grow-1">
                                        <b class="m-0 vmb-book-place pb-1 m-0 line-style">Sài Gòn - MelBourne - Sài Gòn</b>
                                        <div class="py-1">
                                            <p class="vmb-big-word m-0">
                                                <i class="vmb-small-word pr-2">Từ</i>12,993,000đ*</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-md-row flex-column justify-content-start justify-content-md-between align-items-md-center favorite-more-info text-left">
                    <div>
                        <a href="javascript:void 0">* Giá đã bao gồm thuế phí</a>
                        <a href="javascript:void 0" class="d-none d-md-inline-block ml-5">
                            <i class="ti-layers pr-1"></i> Điều khoản &amp; điều kiện </a>
                    </div>
                    <div class="my-2 my-md-0">
      <span class="d-flex justify-content-between align-items-center">
       <a href="javascript:void 0" class="d-block d-md-none">
        <i class="ti-layers pr-1"></i> Điều khoản &amp; điều kiện </a>
       <a href="javascript:" class="favorite-more">Xem thêm <i class="ti-angle-right"></i></a>
      </span>
                    </div>
                </div>
            </div>
            <div class="vmb-choose-us">
                <div class="vmb-choose-us-title my-5">
                    <div class="container py-3">
                        <h3 classname="m-0 text-light vmb-choose-us-title">Tại sao chọn vemaybay.vn?</h3>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row reason-section">
                        <div class="col-md-3 col-6 my-2">
                            <div class="d-flex justify-content-center">
                                <img src="front/img/trangchu/support_24-7.png" alt="Hỗ trợ 24/7">
                            </div>
                            <div class="my-3 text-center">
                                <p class="m-0 reason-title font-weight-bolder" title="Hỗ trợ 24/7">Hỗ trợ 24/7</p>
                                <div class="reason-des my-3">Vemaybay.vn luôn săn sàng tư vấn và giải đáp thắc mắc của Khách hàng 24/7</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-2">
                            <div class="d-flex justify-content-center">
                                <img src="front/img/trangchu/gia-ve-tot.png" alt="Giá vé tốt nhất">
                            </div>
                            <div class="my-3 text-center">
                                <p class="m-0 reason-title font-weight-bolder" title="Giá vé tốt nhất">Giá vé tốt nhất</p>
                                <div class="reason-des my-3">Đảm bảo giá vé máy bay tốt nhất cho nhu cầu đặt mua vé máy bay theo các chặng khác nhau của Khách hàng</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-2">
                            <div class="d-flex justify-content-center">
                                <img src="front/img/trangchu/dich-vu-da-nang.png" alt="Dịch vụ đa dạng">
                            </div>
                            <div class="my-3 text-center">
                                <p class="m-0 reason-title font-weight-bolder" title="Dịch vụ đa dạng">Dịch vụ đa dạng</p>
                                <div class="reason-des my-3">Ngoài dịch vụ vé máy bay chung tôi còn có dịch vụ thuê xe và khách sạn phục vụ Khách hàng</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 my-2">
                            <div class="d-flex justify-content-center">
                                <img src="front/img/trangchu/giao-ve-tan-noi.png" alt="Giao vé tận nơi">
                            </div>
                            <div class="my-3 text-center">
                                <p class="m-0 reason-title font-weight-bolder" title="Giao vé tận nơi">Giao vé tận nơi</p>
                                <div class="reason-des my-3">Giao vé tận nơi nhanh chóng, uy tín, nhận vé mới thanh toán</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-12 my-2">
                        <p class="section-title my-3" title="Aviation partner">Aviation partner</p>
                        <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Bamboo Airways">
                                    <img src="front/img/trangchu/bamboo.png" alt="Bamboo Airways"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="VietNam Airlines">
                                    <img src="front/img/trangchu/VietnamAirlines.jpg" alt="VietNam Airlines"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="vietjet"><img src="front/img/trangchu/vietjet.png" alt="vietjet"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Cathay">
                                    <img src="front/img/trangchu/cathay.png" alt="Cathay"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Korean Airline">
                                    <img src="front/img/trangchu/korean.png" alt="Korean Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Delta Airline">
                                    <img src="front/img/trangchu/delta.png" alt="Delta Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="China Airline">
                                    <img src="front/img/trangchu/china-airlines.png" alt="China Airline">
                                </a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Philippine Airline">
                                    <img src="front/img/trangchu/philippine-airlines.png" alt="Philippine Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Thai Airline">
                                    <img src="front/img/trangchu/thai.png" alt="Thai Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="JetStar Airline">
                                    <img src="front/img/trangchu/jetstar.png" alt="JetStar Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Eva Airline">
                                    <img src="front/img/trangchu/eva-air.png" alt="Eva Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Emirates Airline">
                                    <img src="front/img/trangchu/emirates.png" alt="Emirates Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="American Airline">
                                    <img src="front/img/trangchu/american-airlines.png" alt="American Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Ana Airline">
                                    <img src="front/img/trangchu/ana.png" alt="Ana Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="United Airline">
                                    <img src="front/img/trangchu/united-airlines.png" alt="United Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Japan Airline">
                                    <img src="front/img/trangchu/japan.png" alt="Japan Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Quatar Airline">
                                    <img src="front/img/trangchu/quatar.png" alt="Quatar Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Malaysia Airline">
                                    <img src="front/img/trangchu/malaysia.png" alt="Malaysia Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="France Airline">
                                    <img src="front/img/trangchu/air-france.png" alt="France Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Canada Airline">
                                    <img src="front/img/trangchu/air-canada.png" alt="Canada Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="Turkish Airline">
                                    <img src="front/img/trangchu/turkish-airlines.png" alt="Turkish Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="HongKong Airline">
                                    <img src="front/img/trangchu/hong-kong.png" alt="HongKong Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="China Southen Airline">
                                    <img src="front/img/trangchu/china-southen.png" alt="China Southen Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="China Eastern Airline">
                                    <img src="front/img/trangchu/china-eastern.png" alt="China Eastern Airline"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-5">
                                <a href="javascript:void 0" title="China Airline">
                                    <img src="front/img/trangchu/air-china.png" alt="China Airline"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 my-2">
                        <p class="section-title my-3" title="Hotel partners">Hotel partners</p>
                        <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="Vinpearl">
                                    <img src="front/img/trangchu/Vinpearl.png" alt="Vinpearl"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="Mường Thanh">
                                    <img src="front/img/trangchu/MuongThanh.png" alt="Mường Thanh"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="Furama">
                                    <img src="front/img/trangchu/Furama.png" alt="Furama"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="Pullman">
                                    <img src="front/img/trangchu/Pullma.png" alt="Pullman"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="The Anam">
                                    <img src="front/img/trangchu/hotel-partner-5.png" alt="The Anam"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4">
                                <a href="javascript:void 0" title="The Beach">
                                    <img src="front/img/trangchu/hotel-partner-6.png" alt="The Beach"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <p class="section-title my-3" title="Payment partner">Payment partner</p>
                        <div class="d-flex flex-nowrap flex-md-wrap overflow-auto align-items-center my-3">
                            <div class="partner-item mb-md-3 mr-4 mr-md-2">
                                <a href="javascript:void 0" title="Payoo">
                                    <img src="front/img/trangchu/Payoo.png" alt="Payoo"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4 mr-md-2">
                                <a href="javascript:void 0" title="One pay">
                                    <img src="front/img/trangchu/payment.png" alt="One pay"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4 mr-md-2">
                                <a href="javascript:void 0" title="Visa">
                                    <img src="front/img/trangchu/visa.png" alt="Visa"></a>
                            </div>
                            <div class="partner-item mb-md-3 mr-4 mr-md-2">
                                <a href="javascript:void 0" title="Mastercard">
                                    <img src="front/img/trangchu/master-card.png" alt="Mastercard"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
