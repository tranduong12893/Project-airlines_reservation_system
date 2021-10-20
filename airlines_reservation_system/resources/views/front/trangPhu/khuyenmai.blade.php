@extends('front.layout.master')

@section('title', 'Khuyến Mãi')

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
                                <a href="javascript:void 0" class="vmb-color" title="Khuyến mãi">Khuyến mãi</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row news-relation-layout">
                    {{--                @foreach($ctkhuyenmai as $ctkm)--}}
                    <div class="col-md-8">
                        <div class="d-flex justify-content-start text-center">
                            <h1 class="news-title">Khuyến mãi</h1>
                        </div>
                            <div class="row">
                                @foreach($ctkhuyenmai as $ctkm)
                                <div class="col-md-6">
                                    <div class="d-flex flex-column news-item mb-3">
                                        <a href="ctkhuyenmai/{{$ctkm->id}}">
                                            <img src="front/img/khuyenmai/{{$ctkm->anh}}" class="img-fluid" alt="{{$ctkm->tieude}}" width="300px" height="225px">
                                        </a>
                                        <p class="my-1 news-group-title">Khuyến mãi</p>
                                        <a href="ctkhuyenmai/{{$ctkm->id}}">
                                            <h1 class="m-0 news-title news-title-item font-weight-bolder">{{$ctkm->tieude}}</h1>
                                        </a>
                                        <div class="my-3 news-hoz-line">&nbsp;
                                        </div>
                                        <div class="my-2 news-body-overview line-range text-justify">
                                            <p>{{$ctkm->loidan}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                    </div>
                    <div class="col-md-4"><div class="border rounded my-3 relation-news"><div class="d-flex p-3"><p class="m-0 title">Tin tức liên quan</p></div>
                            <div class="d-flex flex-column px-3">
                                @foreach($ctkhuyenmai as $ctkm)
                                    <a href="ctkhuyenmai/{{$ctkm->id}}" class="d-block text-body hover_yellow my-2">{{$ctkm->loidan}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{--                @endforeach--}}
                </div>
            </div>
        </div>
    </div>
@endsection
