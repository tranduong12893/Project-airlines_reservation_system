@extends('front.layout.master')

@section('title', 'Chọn Chuyến bay')

@section('body')
<div class="main_layout">
  <div class="vmb-homepage">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pt-4" id="vmbResult">
          <div class="ftl-onload-form ftl-none">
            <div class="ftl-onload-label">Vui lòng đợi trong giây lát, chúng tôi đang tìm kiếm chuyến bay và mức giá tốt nhất cho bạn...</div>
            <div class="ftl-onload-journey">
              @foreach($ve as $v)
                    <p>{{$v->diemxuatphat}} <i class="fa fa-arrows-h"></i> {{$v->diemden}}</p>
                    <span>Ngày đi: {{$v->ngaybay}}<i class="fa fa-arrows-h"></i> Ngày về: {{$v->ngayHC}}</span>
                @endforeach
            </div>
          </div>
          <div id="ftlResult-form" class="ftl-flex">
            <div class="ftl-container ftl-mob">
              <div id="ftl-box-wraper">
                  <!-- sap xep -->
                <div class="ftl-box-temp">
                  <div class="ftl-base-header">
                    <i class="fa fa-filter"></i>
                    <span>Sắp xếp theo chuyến bay</span>
                  </div>
                  <form action="">
                      <ul class="ftl-box-sort">
                          <li sort-value="price">
                              <label for="price" class="radio">
                                  <input {{request('sortby') == 'price' ? 'selected' : ''}} type="radio" id="price" class="sort" name="sort" checked="checked" value="price" onchange="this.form.submit();">
                                  <span class="label ftl-asc"></span>
                                  <span>Giá chuyến bay</span>
                              </label>
                          </li>
                          <li sort-value="start-time">
                              <label for="timeup" class="radio">
                                  <input {{request('sortby') == 'start-time' ? 'selected' : ''}} type="radio" id="timeup" class="sort" name="sort" value="start-time" onchange="this.form.submit();">
                                  <span class="label "></span>
                                  <span>Giờ khởi hành</span>
                              </label>
                          </li>
                          <li sort-value="end-time">
                              <label for="timedown" class="radio">
                                  <input {{request('sortby') == 'end-time' ? 'selected' : ''}} type="radio" id="timedown" class="sort" name="sort" value="end-time" onchange="this.form.submit();">
                                  <span class="label"></span>
                                  <span>Giờ hạ cánh</span>
                              </label>
                          </li>
                          <li sort-value="fly-time">
                              <label for="totaltime" class="radio">
                                  <input {{request('sortby') == 'fly-time' ? 'selected' : ''}} type="radio" id="totaltime" class="sort" name="sort" value="fly-time" onchange="this.form.submit();">
                                  <span class="label"></span>
                                  <span>Thời gian bay</span>
                              </label>
                          </li>
                      </ul>
                  </form>
                </div>
                <div id="ftl-base-cart" class="ftl-box-temp ftl-mob"></div>
                  <!-- loc theo hang -->
                <div id="ftl-base-airline" class="ftl-box-temp">
                  <div class="ftl-base-header">
                    <i class="fa fa-filter"></i>
                    <span>Lọc chuyến bay</span>
                  </div>
                  <div class="ftl-base-content">
                    <div class="ftl-base-label">
                      <span>Chọn hãng hàng không</span>
                      <i class="fa fa-plane" style="transform: rotate(-135deg)"></i>
                    </div>
                    <div>
{{--                      <ul class="ftl-base-filter">--}}
{{--                        @foreach($hang as $h)--}}
{{--                              <li value="{{$h->hangmaybay}}" checked="">--}}
{{--                                  <span class="checkmark ftl-active"></span>--}}
{{--                                  <span>{{$h->hangmaybay}}</span>--}}
{{--                              </li>--}}
{{--                              @foreach($hang2 as $h2)--}}
{{--                                  @if($h == $h2)--}}
{{--                                      @break--}}
{{--                                  @endif--}}
{{--                                  @if($h != $h2)--}}
{{--                                      <li value="{{$h2->hangmaybay}}" checked="">--}}
{{--                                          <span class="checkmark ftl-active"></span>--}}
{{--                                          <span>{{$h2->hangmaybay}}</span>--}}
{{--                                      </li>--}}
{{--                                  @endif--}}
{{--                              @endforeach--}}
{{--                        @endforeach--}}

{{--                      </ul>--}}
                    </div>
                  </div>
                </div>
                  <!-- tim kiem chuyen bay -->

              </div>
            </div>
{{--            <form action="datVe" method="post">--}}
                <div class="ftl-content">
                    <div class="ftl-flight">
                        <div id="ftl-flight-selected"></div>
                        @foreach($ve as $v)
                        <div class="ftl-flight-list" id="ftl-flight-list1" leg="1" flight-type="domestic">
                            <div class="ftl-flight-header">
                                <div class="ftl-icon"></div>

                                    <div class="ftl-flight-title">
                                        <p>{{$v->diemxuatphat}}<i class="fa fa-long-arrow-right"></i> {{$v->diemden}}</p>
                                        <span>{{$v->ngaybay}}</span>
                                    </div>

                            </div>
                            <div class="progress-wrap progress" data-progress-percent="100">
                                <div class="progress-bar progress" style="left: 370px;"></div>
                            </div>
                            <div class="ftl-flight-main">

                                    <div class="ftl-flight-item ">
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
                                                <div class="ftl-flight-price">{{$v->giave}} <span>VND</span></div>
                                                @if($loai == 'motchieu')
                                                    <form action="/thanhtoan/{{$v->machuyenbay}}" >
                                                        <button type="submit">Thanh toan</button>
                                                    </form>
                                                @endif
                                                @if($loai == 'khuhoi')
                                                    <form action="/chonchuyen/{{$v->machuyenbay}}">
                                                        <button type="submit">Chọn chuyến bay</button>
                                                    </form>
                                                @endif
                                            </li>
                                        </ul>
                                        <div class="ftl-flight-box-detail"></div>
                                    </div>

                            </div>
                        </div>
                        @endforeach
                        @foreach($ve2 as $v2)
                        <div class="ftl-flight-list" id="ftl-flight-list1" leg="1" flight-type="domestic">
                            <div class="ftl-flight-header">
                                <div class="ftl-icon"></div>
                                    <div class="ftl-flight-title">
                                        <p>{{$v2->diemxuatphat}}<i class="fa fa-long-arrow-right"></i> {{$v2->diemden}}</p>
                                        <span>{{$v2->ngaybay}}</span>
                                    </div>
                            </div>
                            <div class="progress-wrap progress" data-progress-percent="100">
                                <div class="progress-bar progress" style="left: 370px;"></div>
                            </div>
                            <div class="ftl-flight-main">

                                    <div class="ftl-flight-item ">
                                        <ul class="ftl-flight-info">
                                            <li>
                                                <img src="https://ibe.vemaybay.vn/Resources/Images/Airline/vj.gif">
                                                <p>{{$v2->hangmaybay}}     </p>
                                            </li>
                                            <li>
                                                <div class="ftl-flight-city">{{$v2->diemxuatphat}}</div>
                                                <div class="ftl-flight-time">{{$v2->giobay}}</div>
                                            </li>
                                            <li>
                                                <div class="ftl-flight-numb">{{$v2->machuyenbay}}     </div>
                                                <div class="ftl-flight-line">
                                                    <div class="ftl-flight-fly ftl-line"></div>
                                                </div>
                                                <a class="ftl-flight-detail">Chi tiết</a>
                                            </li>
                                            <li>
                                                <div class="ftl-flight-city">{{$v2->diemden}}</div>
                                                <div class="ftl-flight-time">{{$v2->giohacanh}}</div>
                                            </li>
                                            <li>
                                                <div class="ftl-flight-price">{{$v2->giave}} <span>VND</span></div>
                                                <form action="/chonchuyen/{{$v2->machuyenbay}}">
                                                    <button type="submit" >Chọn chuyến bay</button>
                                                </form>
                                            </li>
                                        </ul>
                                        <div class="ftl-flight-box-detail"></div>
                                    </div>

                            </div>

                        </div>
                        @endforeach
                    </div>
                    <div>
                        @if($loai == 'khuhoi')
                            <button type="submit" href="/front/datVe/thanhtoan">Thanh toan</button>
                        @endif
                    </div>
                </div>
{{--            </form>--}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
