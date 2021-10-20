@extends('front.layout.master')

@section('title', 'Địa điểm yêu thích')

@section('body')
    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="container">
                <div class="my-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb rounded-0 px-0 py-2">
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="/" class="text-truncate" title="Trang chủ">Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="javascript:void 0" class="vmb-color" title="Điểm đến yêu thích">Điểm đến yêu thích</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-4">
                            <div class="d-flex justify-content-center text-center">
                                <h1 class="news-title">Điểm đến yêu thích</h1>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="hoz-line"></div>
                            </div>
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-md-3 col-12">
                                </div>
                                <div class="col-md-6 col-12 text-center">Vemaybay.vn
                                    is a leading Southeast Asia online travel company that provides a wide
                                    range of travel needs in one platform, enabling customers to create
                                    moments together with their loved ones.</div>
                                <div class="col-md-3 col-12"></div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach($diemdens as $diemden)
                                <div class="col-md-4">
                                    <div class="d-flex flex-column news-item mb-3">
                                        <a href="diemDenYeuThich/{{$diemden->id}}">
                                            <img src="front/img/diemden/{{$diemden->anh}}" class="img-fluid" alt="{{$diemden->tieude}}"width="300px" height="225px"  >
                                        </a>
                                        <p class="my-1 news-group-title">Điểm đến yêu thích</p>
                                        <a href="diemDenYeuThich/{{$diemden -> id}}">
                                            <h1 class="m-0 news-title news-title-item font-weight-bolder">{{$diemden->tieude}}</h1>
                                        </a>
                                        <div class="my-3 news-hoz-line">&nbsp;</div>
                                        <div class="my-2 news-body-overview line-range text-justify">{{$diemden->loidan}}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
