@extends('front.layout.master')

@section('title', 'Khuyến Mãi')

@section('body')
    <div class="vmb-homepage">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="my-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb rounded-0 px-0 py-2">
                                <li class="breadcrumb-item" aria-current="page"><a href="/"
                                                                                   class="text-truncate"
                                                                                   title="Trang chủ">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a
                                        href="/ctkhuyenmai" title="Khuyến mãi">Khuyến
                                        mãi</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void 0"
                                                                                          class="vmb-color"
                                                                                          title="{{$ctkhuyenmais->tieude}}">
                                        {{$ctkhuyenmais->tieude}}
                                    </a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="news-detail-contaier"><h1 class="news-detail-title pb-4 pt-2" title="{{$ctkhuyenmais->tieude}}">
                            {{$ctkhuyenmais->tieude}}
                        </h1>
                        <div class="mt-3 news-content">
                            <div class="article-detail"><p>{{$ctkhuyenmais->noidung}}</p>
                                <p><img alt="" src=""
                                        style="width:747px;height:747px;display:block;margin-left:auto;margin-right:auto">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded my-3 relation-news">
                            <div class="d-flex p-3"><p class="m-0 title">Tin tức liên quan</p></div>
                            @foreach($ctkhuyenmai as $ctkm)
                                <div class="d-flex flex-column px-3">
                                    <a
                                        href="ctkhuyenmai/{{$ctkm->id}}"
                                        class="d-block text-body hover_yellow my-2">{{$ctkm->loidan}}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
