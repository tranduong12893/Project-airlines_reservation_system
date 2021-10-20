@extends('front.layout.master')

@section('title', 'Địa điểm yêu thích')

@section('body')
    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="my-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb rounded-0 px-0 py-2">
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a href="/" class="text-truncate" title="Trang chủ">Trang chủ</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a href="/diemDenYeuThich" title="Điểm đến yêu thích">Điểm đến yêu thích</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="javascript:void 0" class="vmb-color" title="Palawan Thời Gian Như Ngưng Đọng">{{$NDdiemden -> tieude}}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="news-detail-contaier">
                            <h1 class="news-detail-title pb-4 pt-2" title="Palawan Thời Gian Như Ngưng Đọng">{{$NDdiemden -> tieude}}</h1>
                            <div class="mt-3 news-content">
                                {{$NDdiemden -> noidung}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded my-3 relation-news">
                            <div class="d-flex p-3"><p class="m-0 title">Tin tức liên quan</p></div>
                            <div class="d-flex flex-column px-3">
                                @foreach($diemdens as $tintuc)
                                <a href="diemDenYeuThich/{{$tintuc -> id}}"
                                    class="d-block text-body hover_yellow my-2">{{$tintuc -> tieude}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
