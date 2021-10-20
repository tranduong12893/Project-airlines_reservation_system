@extends('front.layout.admin')

@section('title', 'ADMIN-CamNang')

@section('content')

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left" >Cẩm nang du lịch</h2>
                            <form action="{{url(('searchCN'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addCN" class="btn btn-success pull-right add1">Thêm bản ghi mới</a>
                        </div>
                        <table class="table table-bordered table-striped" >
                            <thead>
                            <tr>
                                <th class="c1" style="text-align: center">Tiêu Đề</th>
                                <th class="c2" style="text-align: center">Lời Dẫn</th>
                                <th class="c3" style="text-align: center">Nội Dung</th>
                                <th class="c4" style="text-align: center">Hình Ảnh</th>
                                <th class="c5" style="text-align: center">Ngày Đăng</th>
                                <th class="c6" style="text-align: center">Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($CN as $cn)
                                <tr>
                                    <td class="c1" style="text-align: center">{{$cn->tieude}}</td>
                                    <td class="c2" style="text-align: center; width: 250px; white-space: break-spaces">{{$cn->loidan}}</td>
                                    <td class="c3" style="text-align: center; width: 400px; white-space: break-spaces">{{$cn->noidung}}</td>
                                    <td class="c4" style="text-align: center"><img src="front/img/camnang/{{$cn->anh}}" width="120px" height="120px"/>
                                    </td>
                                    <td class="c5" style="text-align: center">{{ date('d,M, Y', strtotime($cn->created_at)) }}</td>
                                    <td class="c6" style="text-align: center">

                                        <a href='{{url("deleteCN",["id"=>$cn->id])}}' title='Delete Record'
                                           data-toggle='tooltip'>
                                            <span class='glyphicon glyphicon-trash'></span></a>
                                        <a href='{{url("editCN",["id"=>$cn->id])}}' title='Edit Record'
                                           data-toggle='tooltip' style="margin-left: 5px">
                                            <span class='glyphicon glyphicon-pencil'></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
