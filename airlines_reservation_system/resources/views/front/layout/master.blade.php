<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>@yield('title') | Đặt Vé Máy Bay Giá Rẻ Trực Tuyến</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="generator" content="vemaybay.vn">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="https://www.vemaybay.vn/images/favicon.gif">
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/animations.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/icheck-material.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/icheck-material-custom.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/hamburgers.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/about.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/hightprize.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/homepage.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/news-spaces.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/news.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/promotion.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/register.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/register.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/help.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
{{--    <script src="{{asset('front/js/jquery.js')}}"></script>--}}
    <link id="SYJsUYEyDq1hQeMmVeNlQPdaQPcmVewnMeNrTvNqQuNrDtFsWOpdUq1eTuxsDOBvRPFnTOMmTOdmDeFrUr1uHLYmEMwoDbI4" rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.css')}}" media="all">
    <link id="SYJsUYEyDq1hQeMmVeNlQPdaQPcmVewnMeNrTvNqQuNrDtFsWOpdUq1uROtZWOBZWKxlSOwmQvFrHvQ1EKwoDbVmFV44" rel="stylesheet" type="text/css" href="{{asset('front/css/vemaybay.css')}}" media="all">
</head>
<body>
<div id="ftl-modal-backdrop" class="ftl-none"></div>
<div id="ftl-modal-message" class="ftl-none"></div>
<div id="ftl-modal" class="ftl-none"></div>
<div id="ftl-modal-container" class="ftl-none">
    <button type="button" class="ftl-modal-close">
        <i class="fa fa-times"></i>
    </button>
</div>
<div id="ftl-modal-cart" class="ftl-none">
    <div class="ftl-cart-icon"><i class="fa fa-shopping-cart"></i>
    </div>
    <div class="ftl-cart-basket"></div>
</div>
<div id="vemaybay-app" class="w-100 navbar-opened">
    <div id="top-menu" class="vmb-header w-100 py-md-2 py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{url('/')}}" class="d-block">
                    <img src="{{asset('front/img/trangchu/Logo.png')}}" alt="vemaybay.vn" title="vemaybay.vn"></a>
                <div class="vmb-header-middle m-auto d-none d-md-block">
                    <span>Hotline</span>
                    <p class="text-nowrap m-0 text-light">
                        <b>
                            <a href="javascript:void 0" class="text-white" title="vemaybay.vn - hotline: 0932 126 988">0932 126 988</a>
                        </b>
                    </p>
                    <p class="text-nowrap m-0 text-light">
                        <b>
                            <a href="javascript:void 0" class="text-white" title="vemaybay.vn - điện thoại: (028) 38 256 256">(028) 38 256 256</a>
                        </b>
                    </p>
                </div>
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <div class="ml-auto pr-4 d-none d-md-block">
                        <a class="vmb-header-login d-flex justify-content-start align-items-center" href="{{url('/login')}}">
                            <span> Đăng nhập hoặc đăng ký</span>
                            <i class="fas fa-user-circle ml-2" style="font-size:28px"></i></a>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="ml-auto pr-4 d-none d-md-block" style="color: white">
                        <span>Xin chào {{ \Illuminate\Support\Facades\Auth::user()->name }} <i class="fas fa-user-circle ml-2" style="font-size:28px"></i></span><br>

                        <a href="{{url('/member')}}"><span>Xem thông tin</span></a>
                        <a href="{{url('/logout')}}" style="color: red"><p>Đăng xuất</p></a>

                    </div>
                @endif
                <div class="menu-btn">
                    <div class="hamburger p-0 hamburger--slider ml-2" id="toggle-menu">
                        <div class="hamburger-box">
                            <div class="hamburger-inner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 full-screen" id="desktop-menu">
            <div class="container pt-4">
                <div><div class="search-box">
                        <input type="text" name="textSearch" class="footer-input-search border-bottom vmb-border-color" placeholder="Chúng tôi có thể giúp gì cho bạn">
                        <span class="fas fa-search search-icon text-light"></span>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <div class="d-flex justify-content-between mt-5">
                        <div class="services">
                            <span class="menu-subtitle">Dịch vụ</span>
                            <ul class="list-menu-container my-3 p-0">
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Vé máy bay">Vé máy bay</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Xe đưa đón">Xe đưa đón</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Khách sạn">Khách sạn</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Bảo hiểm">Bảo hiểm</a></li>
                            </ul>
                        </div>
                        <div class="benefits">
                            <span class="menu-subtitle">Ưu đãi</span>
                            <ul class="list-menu-container my-3 p-0">
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="{{url('/ctkhuyenmai')}}" title="Khuyến mãi">Khuyến mãi</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Combo đặc biệt">Combo đặc biệt</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Đăng ký tin khuyến mãi">Đăng ký tin khuyến mãi</a></li>
                            </ul>
                        </div>
                        <div class="benefits">
                            <span class="menu-subtitle">Thông tin giới thiệu</span>
                            <ul class="list-menu-container my-3 p-0">
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="{{url('/camnang')}}" title="Cẩm nang du lịch">Cẩm nang du lịch</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="{{url('/aboutus')}}" title="Về chúng tôi">Về chúng tôi</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Giải thưởng">Giải thưởng</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="{{url('/lienhe')}}" title="Liên hệ">Liên hệ</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Quản lý đặt chỗ">Quản lý đặt chỗ</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="{{url('/trogiup')}}" title="Trợ giúp">Trợ giúp</a></li>
                                <li class="navbar-list-menu col-6 col-md-12 p-0 my-2">
                                    <a class="hover_yellow text-white" href="javascript:void 0" title="Tuyển dụng">Tuyển dụng</a></li>
                            </ul>
                        </div>
                        <div class="w-25">
                            <span class="menu-subtitle">Ngôn ngữ &amp; tiền tệ</span>
                            <script>function handleOnChangeLanguage(n){window.location.href=n}</script>
                            <div class="setting-field my-3">
                                <span class="menu-sub-title">Ngôn ngữ</span>
                                <select class="form-control text-white border-0 rounded-0 p-0" onchange="handleOnChangeLanguage(this.value)">
                                    <option value="https://www.vemaybay.vn/changelanguage/1?returnUrl=%2F" class="text-dark"> English - Tiếng Anh </option>
                                    <option value="https://www.vemaybay.vn/changelanguage/8?returnUrl=%2F" class="text-dark"> Japan - Tiếng Nhật </option>
                                    <option value="https://www.vemaybay.vn/changelanguage/2?returnUrl=%2F" selected="selected" class="text-dark"> Tiếng Việt </option>
                                </select>
                            </div>
                            <div class="setting-field mb-3">
                                <span class="menu-sub-title">Tiền tệ</span>
                                <select class="form-control text-white border-0 rounded-0 p-0">
                                    <option value="value" class="text-dark" selected="selected">VNĐ</option>
                                </select>
                            </div>
                            <div class="icheck-material-orange setting-field is-round-trip">
                                <input type="checkbox">
                                <label for="someRadioId1" class="text-white">Khứ hồi</label>
                            </div>
                            <button class="btn btn-block btn-vmb register-button btn-warning my-3">Tìm kiếm chuyến bay</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center social-icons">
                        <h3 class="m-0 text-light follow-us">Theo dõi chúng tôi tại</h3>
                        <a href="#" target="_blank" class="d-block">
                            <i class="ti-facebook text-light px-2 hover_yellow"></i></a>
                        <a href="#" target="_blank" class="d-block">
                            <i class="ti-youtube text-light px-2 hover_yellow"></i></a>
                        <a href="#" target="_blank" class="d-block">
                            <i class="ti-instagram text-light px-2 hover_yellow"></i></a>
                    </div>
                </div>
                <div class="d-block d-md-none pt-4">
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>Dịch vụ</span>
                            <span class="menu-icon"><i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Vé máy bay">Vé máy bay</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Xe đưa đón">Xe đưa đón</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Khách sạn">Khách sạn</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Bảo hiểm">Bảo hiểm</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>Ưu đãi</span>
                            <span class="menu-icon"><i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none animated">
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="{{url('/ctkhuyenmai')}}" title="Khuyến mãi">Khuyến mãi</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Combo đặc biệt">Combo đặc biệt</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Đăng ký tin khuyến mãi">Đăng ký tin khuyến mãi</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>Thông tin giới thiệu</span>
                            <span class="menu-icon">
        <i class="fas fa-angle-down"></i>
       </span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="{{url('/camnang')}}" title="Cẩm nang du lịch">Cẩm nang du lịch</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="{{url('/aboutus')}}" title="Về chúng tôi">Về chúng tôi</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Giải thưởng">Giải thưởng</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="{{url('/lienhe')}}" title="Liên hệ">Liên hệ</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Quản lý đặt chỗ">Quản lý đặt chỗ</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="{{url('/trogiup')}}" title="Trợ giúp">Trợ giúp</a>
                            </div>
                            <div class="col-6 col-md-12 mt-2">
                                <a class="hover_yellow text-white" href="javascript:void 0" title="Tuyển dụng">Tuyển dụng</a>
                            </div>
                        </div>
                    </div>
                    <span class="menu-subtitle">Ngôn ngữ &amp; tiền tệ</span>
                    <script>function handleOnChangeLanguage(n){window.location.href=n}</script>
                    <div class="setting-field my-3">
                        <span class="menu-sub-title">Ngôn ngữ</span>
                        <select class="form-control text-white border-0 rounded-0 p-0" onchange="handleOnChangeLanguage(this.value)">
                            <option value="https://www.vemaybay.vn/changelanguage/1?returnUrl=%2F" class="text-dark"> English - Tiếng Anh </option>
                            <option value="https://www.vemaybay.vn/changelanguage/8?returnUrl=%2F" class="text-dark"> Japan - Tiếng Nhật </option>
                            <option value="https://www.vemaybay.vn/changelanguage/2?returnUrl=%2F" selected="selected" class="text-dark"> Tiếng Việt </option>
                        </select>
                    </div>
                    <div class="setting-field mb-3">
                        <span class="menu-sub-title">Tiền tệ</span>
                        <select class="form-control text-white border-0 rounded-0 p-0">
                            <option value="value" class="text-dark" selected="selected">VNĐ</option>
                        </select>
                    </div>
                    <div class="icheck-material-orange setting-field is-round-trip">
                        <input type="checkbox">
                        <label for="someRadioId1" class="text-white">Khứ hồi</label>
                    </div>
                    <button class="btn btn-block btn-vmb register-button btn-warning my-3">Tìm kiếm chuyến bay</button>
                </div>
            </div>
        </div>
    </div>

    <!--  khu dat phan main-->
@yield('body')
    <!--  ket thuc phan main-->

    <div class="footer py-5">
        <div class="container">
            <div class="d-none d-lg-block">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-md-5 mr-0">
                            <p class="color-yellow contact-number">
                                <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">Hotline</p>
                            <p class="text-light contact-number-2">
                                <a href="javascript:void 0" class="text-white" title="vemaybay.vn - hotline: 0932 126 988">0932 126 988</a></p>
                        </div>
                        <div class="mx-0 mx-md-5">
                            <p class="color-yellow contact-number">
                                <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">Điện thoại</p>
                            <p class="text-light contact-number-2">
                                <a href="javascript:void 0" class="text-white" title="vemaybay.vn - điện thoại: (028) 38 256 256">(028) 38 256 256</a>
                            </p>
                        </div>
                    </div>
                    <div class="ml-auto d-md-block d-none">
                        <div class="search-box">
                            <input type="text" name="textSearch" class="footer-input-search border-bottom vmb-border-color" placeholder="Chúng tôi có thể giúp gì cho bạn">
                            <span class="fas fa-search search-icon text-light"></span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <ul class="nav justify-content-between nav-justified footer-category-list" role="tablist">
                        <li class="nav-item text-left">
                            <a role="button" data-index="0" class="nav-link p-0 text-nowrap mb-3 pb-2 active" title="Vé máy bay theo thành phố">Vé máy bay theo thành phố</a></li>
                        <li class="nav-item text-center">
                            <a role="button" data-index="1" class="nav-link p-0 text-nowrap mb-3 pb-2" title="vé máy bay theo quốc gia">vé máy bay theo quốc gia</a></li>
                        <li class="nav-item text-center">
                            <a role="button" data-index="2" class="nav-link p-0 text-nowrap mb-3 pb-2" title="vé máy bay theo hãng hàng không">vé máy bay theo hãng hàng không</a></li>
                        <li class="nav-item text-center">
                            <a role="button" data-index="3" class="nav-link p-0 text-nowrap mb-3 pb-2" title="các khách sạn hàng đầu">các khách sạn hàng đầu</a></li>
                    </ul>
                    <div class="tab-content pt-2" data-target=".footer-category-list">
                        <div class="tab-pane active show" role="tabpanel" data-target="0">
                            <div class="row w-100">
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi đà nẵng">vé máy bay đi đà nẵng</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi đà lạt">vé máy bay đi đà lạt</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi huế">vé máy bay đi huế</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi hà nội">vé máy bay đi hà nội</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi vinh">vé máy bay đi vinh</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi buôn ma thuột">vé máy bay đi buôn ma thuột</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi phú quốc">vé máy bay đi phú quốc</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi hải phòng">vé máy bay đi hải phòng</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#"> </a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#"> </a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi tp.hcm (sài gòn)">vé máy bay đi tp.hcm (sài gòn)</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi nha trang">vé máy bay đi nha trang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" data-target="1">
                            <div class="row w-100">
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi mỹ">vé máy bay đi mỹ</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi canada">vé máy bay đi canada</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi đức">vé máy bay đi đức</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi thái lan">vé máy bay đi thái lan</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi nhật bản">vé máy bay đi nhật bản</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi trung quốc">vé máy bay đi trung quốc</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi singapore">vé máy bay đi singapore</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi úc">vé máy bay đi úc</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#"> </a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi hàn quốc">vé máy bay đi hàn quốc</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi pháp">vé máy bay đi pháp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" data-target="2">
                            <div class="row w-100">
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay vietjet air">vé máy bay vietjet air</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay eva airways">vé máy bay eva airways</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay aeroflot">vé máy bay aeroflot</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay jetstar pacific airlines">vé máy bay jetstar pacific airlines</a>
                                    </div>
                                    <div class="padding-style"
                                    ><a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay korean air">vé máy bay korean air</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay tiger airways">vé máy bay tiger airways</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay vietnam airlines">vé máy bay vietnam airlines</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay qatar airways">vé máy bay qatar airways</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#"> </a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay airasia">vé máy bay airasia</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay etihad airways">vé máy bay etihad airways</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" data-target="3">
                            <div class="row w-100">
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi mỹ">vé máy bay đi mỹ</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi canada">vé máy bay đi canada</a>
                                    </div>
                                    <div class="padding-style">

                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi huế">vé máy bay đi huế</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi hà nội">vé máy bay đi hà nội</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi vinh">vé máy bay đi vinh</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi buôn ma thuột">vé máy bay đi buôn ma thuột</a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi phú quốc">vé máy bay đi phú quốc</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi hải phòng">vé máy bay đi hải phòng</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#"> </a>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi tp.hcm (sài gòn)">vé máy bay đi tp.hcm (sài gòn)</a>
                                    </div>
                                    <div class="padding-style">
                                        <a class="hover_yellow text-white text-nowrap f-12" href="#" title="vé máy bay đi nha trang">vé máy bay đi nha trang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12 footer-seperate">
                        <div class="border-bottom"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p class="footer-about-us-title">Thông tin thêm</p>
                        <nav class="nav flex-column my-3 footer-web-info">
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Điều khoản sử dụng">Điều khoản sử dụng</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Hướng dẫn đặt vé">Hướng dẫn đặt vé</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Thanh toán tại các Cửa Hàng Tiện Lợi 24/7">Thanh toán tại các Cửa Hàng Tiện Lợi 24/7</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Hướng dẫn thanh toán và giao nhận">Hướng dẫn thanh toán và giao nhận</a>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <p class="footer-about-us-title">Về chúng tôi</p>
                        <nav class="nav flex-column my-3 footer-web-info">
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="{{url('/aboutus')}}" title="Giới thiệu về vemaybay.vn">Giới thiệu về vemaybay.vn</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="news.air.tickets">news.air.tickets</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Khách hàng nói về chúng tôi">Khách hàng nói về chúng tôi</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Giải thưởng">Giải thưởng</a>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <p class="footer-about-us-title">Hỗ trợ</p>
                        <nav class="nav flex-column my-3 footer-web-info">
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Phản hồi">Phản hồi</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="#" title="Tư vấn hỗ trợ đặt vé">Tư vấn hỗ trợ đặt vé</a>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <p class="footer-about-us-title">Trụ sở</p>
                        <nav class="nav flex-column my-3 footer-web-info">
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh">Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh">Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm">Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm</a>
                            <a class="hover_yellow nav-link py-2 px-0 text-white" href="javascript:void 0" title="Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng">Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="d-lg-none">
                <div class="footer-hotline-mobile">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-md-5 mr-0">
                            <p class="color-yellow contact-number">
                                <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">Hotline</p>
                            <p class="text-light contact-number-2">
                                <a href="javascript:void 0" class="text-white" title="vemaybay.vn - hotline: 0932 126 988">0932 126 988</a></p>
                        </div>
                        <div class="mx-0 mx-md-5">
                            <p class="color-yellow contact-number">
                                <img src="{{asset('front/img/trangchu/hotline-icon.png')}}">Điện thoại</p>
                            <p class="text-light contact-number-2">
                                <a href="javascript:void 0" class="text-white" title="vemaybay.vn - điện thoại: (028) 38 256 256">(028) 38 256 25</a></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column menu-container mb-3">
                    <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                        <span>Thông tin thêm</span>
                        <span class="menu-icon">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </div>
                    <div class="row menu-list d-none">
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Điều khoản sử dụng">Điều khoản sử dụng</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Hướng dẫn đặt vé">Hướng dẫn đặt vé</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Thanh toán tại các Cửa Hàng Tiện Lợi 24/7">Thanh toán tại các Cửa Hàng Tiện Lợi 24/7</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Hướng dẫn thanh toán và giao nhận">Hướng dẫn thanh toán và giao nhận</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column menu-container mb-3">
                    <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                        <span>Về chúng tôi</span>
                        <span class="menu-icon">
                            <i class="fas fa-angle-down"></i></span>
                    </div>
                    <div class="row menu-list d-none">
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="{{url('/aboutus')}}" title="Giới thiệu về vemaybay.vn">Giới thiệu về vemaybay.vn</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="news.air.tickets">news.air.tickets</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Khách hàng nói về chúng tôi">Khách hàng nói về chúng tôi</a>
                        </div>
                        <div class="col-12 mt-2"><a class="hover_yellow text-white" href="javascript:void 0" title="Giải thưởng">Giải thưởng</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column menu-container mb-3">
                    <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                        <span>Hỗ trợ</span>
                        <span class="menu-icon">
                            <i class="fas fa-angle-down"></i></span>
                    </div>
                    <div class="row menu-list d-none">
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="Phản hồi">Liên hệ</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="#" title="Tư vấn hỗ trợ đặt vé">Tư vấn hỗ trợ đặt vé</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column menu-container mb-3">
                    <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2"><span>Trụ sở</span>
                        <span class="menu-icon"><i class="fas fa-angle-down"></i></span>
                    </div>
                    <div class="row menu-list d-none">
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh">Văn phòng chính: 145 Điện Biên Phủ, Quận 1, Tp. Hồ Chí Minh</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh">Chi Nhánh: 268 Cô Bắc, Quận 1, Tp. Hồ Chí Minh</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm">Chi Nhánh Hà Nội: 23D Hàm Long, Q. Hoàn Kiếm</a>
                        </div>
                        <div class="col-12 mt-2">
                            <a class="hover_yellow text-white" href="javascript:void 0" title="Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng">Chi Nhanh Đà Nẵng: 06 Duy Tân, Q. Hải Châu, Đà Nẵng</a>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>Vé máy bay theo thành phố</span>
                            <span class="menu-icon">
                                <i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi đà nẵng">vé máy bay đi đà nẵng</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi đà lạt">vé máy bay đi đà lạt</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi huế">vé máy bay đi huế</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi hà nội">vé máy bay đi hà nội</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi vinh">vé máy bay đi vinh</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi buôn ma thuột">vé máy bay đi buôn ma thuột</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi phú quốc">vé máy bay đi phú quốc</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi hải phòng">vé máy bay đi hải phòng</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi tp.hcm (sài gòn)">vé máy bay đi tp.hcm (sài gòn)</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi nha trang">vé máy bay đi nha trang</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>vé máy bay theo quốc gia</span>
                            <span class="menu-icon">
                                <i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi mỹ">vé máy bay đi mỹ</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi canada">vé máy bay đi canada</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi đức">vé máy bay đi đức</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi thái lan">vé máy bay đi thái lan</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi nhật bản">vé máy bay đi nhật bản</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi trung quốc">vé máy bay đi trung quốc</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi singapore">vé máy bay đi singapore</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi úc">vé máy bay đi úc</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi hàn quốc">vé máy bay đi hàn quốc</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi pháp">vé máy bay đi pháp</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>vé máy bay theo hãng hàng không</span>
                            <span class="menu-icon">
                                <i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay vietjet air">vé máy bay vietjet air</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay eva airways">vé máy bay eva airways</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay aeroflot">vé máy bay aeroflot</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay jetstar pacific airlines">vé máy bay jetstar pacific airlines</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay korean air">vé máy bay korean air</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay tiger airways">vé máy bay tiger airways</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay vietnam airlines">vé máy bay vietnam airlines</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay qatar airways">vé máy bay qatar airways</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay airasia">vé máy bay airasia</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay etihad airways">vé máy bay etihad airways</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column menu-container mb-3">
                        <div class="menu-subtitle sub-menu d-flex justify-content-between pb-2">
                            <span>các khách sạn hàng đầu</span>
                            <span class="menu-icon">
                                <i class="fas fa-angle-down"></i></span>
                        </div>
                        <div class="row menu-list d-none">
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi mỹ">vé máy bay đi mỹ</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi canada">vé máy bay đi canada</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi huế">vé máy bay đi huế</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi hà nội">vé máy bay đi hà nội</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi vinh">vé máy bay đi vinh</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi buôn ma thuột">vé máy bay đi buôn ma thuột</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi phú quốc">vé máy bay đi phú quốc</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi hải phòng">vé máy bay đi hải phòng</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi tp.hcm (sài gòn)">vé máy bay đi tp.hcm (sài gòn)</a>
                            </div>
                            <div class="col-12 mt-2">
                                <a class="hover_yellow text-white" href="#" title="vé máy bay đi nha trang">vé máy bay đi nha trang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center respon-footer mt-4">
                <div>
                    <a href="{{url('/')}}" title="vemaybay.vn">
                        <img src="{{asset('front/img/trangchu/Logo.png')}}" style="width:160px" alt="vemaybay.vn"></a>
                </div>
                <div class="d-none d-md-block d-flex text-center mt-1 px-2">
                    <span class="px-1 tax-info">CÔNG TY TNHH VEMAYBAY VN - 181/4 LÊ THÁNH TÔN, P. BẾN THÀNH, Q.1, TP HCM |
                        MÃ SỐ DOANH NGHIỆP: 0312830694 DO SỞ KẾ HOẠCH VÀ ĐẦU TƯ TP HCM CẤP NGÀY 24/06/2014</span>
                </div>
                <div>
                    <a href="https://moit.gov.vn/" target="_blank">
                        <img src="{{asset('front/img/trangchu/bocongthuong.png')}}" style="width:95px"> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.vemaybay={path:"https://ibe.vemaybay.vn",url:"/flight-result",language:"vi"}
</script>
{{--<script src="{{asset('front/js/popper.js')}}"></script>--}}
<script>
    $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
                if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
                var x = Number($this.val()) + 1
                if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
    })
</script>
<script src="{{asset('front/js/bootstrap.js')}}"></script>
<script>
    $(()=>{$("#toggle-menu").on("click",function(){
        $("#toggle-menu").toggleClass("is-active");
        $("#desktop-menu").toggleClass("min-vh-100");
        $("#top-menu").toggleClass("sticky-top")});
        $(".is-round-trip").on("click",function(){const n=$(this).find('input[type="checkbox"]')[0];
            n&&(n.checked=!n.checked)});
        $(".menu-container").on("click",function(){const t=$(this).find(".menu-list"),n=$(this).find(".menu-icon i"),i=n.attr("class");
            n.attr("class",i==="fas fa-angle-down"?"ti-angle-up":"fas fa-angle-down");
            t.toggleClass("d-none")});
        $(".footer-category-list .nav-link").on("click",function(){
            $(".footer-category-list .nav-link").removeClass("active");
            $('[data-target=".footer-category-list"] .tab-pane').removeClass("active show");const n=$(this);
            n.addClass("active");
            const t=n.attr("data-index");
            $(`[data-target="${t}"]`).addClass("active show")})})
</script>
{{--<script src="{{asset('front/js/vemaybay.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/luna.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/geocode.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/datepicker.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/range.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/language.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/script.js')}}"></script>--}}
{{--<script type="text/javascript" async="" src="{{asset('front/js/embed.js')}}"></script>--}}
<script src="{{asset('front/js/search.js')}}"></script>
</body>
</html>

