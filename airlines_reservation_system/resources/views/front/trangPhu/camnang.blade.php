@extends('front.layout.master')

@section('title', 'Cẩm nang du lịch')

@section('body')

{{--//main layout--}}

<div class=main_layout>
    <div class=vmb-homepage>
        <div class=container>
            <div class=my-3>
                <nav aria-label=breadcrumb>
                    <ol class="breadcrumb rounded-0 px-0 py-2">
                        <li class=breadcrumb-item aria-current=page>
                            <a href="/" class=text-truncate title="Trang chủ">Trang chủ</a>
                        <li class="breadcrumb-item active" aria-current=page>
                            <a href="javascript:void 0" class=vmb-color title="Cẩm nang du lịch">Cẩm nang du lịch</a>
                    </ol>
                </nav>
            </div>
            <div class=row>
                <div class=col-md-12>
                    <div class=my-4>
                        <div class="d-flex justify-content-center text-center">
                            <h1 class=news-title>Cẩm Nang Du Lịch</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class=hoz-line>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center my-3">
                            <div class="col-md-3 col-12"></div>
                            <div class="col-md-6 col-12 text-center"></div>
                            <div class="col-md-3 col-12"></div>
                        </div>
                    </div>
                    <div class=row>

{{--                        //start for each--}}
                        @foreach($camnangs as $camnang)
                        <div class=col-md-4>
                            <div class="d-flex flex-column news-item mb-3">
                                <a href="camnang/{{$camnang->id}}">
                                    <img src="front/img/camnang/{{$camnang->anh}}" alt="{{$camnang->tieude}}" width="300px" height="225px" >
                                </a>
                                <p class="my-1 news-group-title">Cẩm Nang Du Lịch</p>
                                <a href="camnang/{{$camnang->id}}">
                                    <h1 class="m-0 news-title news-title-item font-weight-bolder">{{$camnang->tieude}}</h1>
                                </a>
                                `<div class="my-3 news-hoz-line">&nbsp;</div>
                                <div class="my-2 news-body-overview line-range text-justify">{{$camnang->noidung}}</div>
                            </div>
                        </div>
                        @endforeach
{{--                        //end for each--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
