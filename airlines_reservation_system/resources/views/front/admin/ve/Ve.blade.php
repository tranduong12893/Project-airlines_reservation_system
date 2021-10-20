@extends('front.layout.admin')

@section('title', 'ADMIN-Ve')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Vé Máy Bay</h2>
                            <form action="{{url(('searchVe'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addVe" class="btn btn-success pull-right add1">Thêm bản ghi mới</a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="v1" style="text-align: center">Mã Vé</th>
                                <th class="v2" style="text-align: center">Tên khách hàng</th>
                                <th class="v3" style="text-align: center">Mã Chuyến Bay</th>
                                <th class="v4" style="text-align: center">Loại Vé</th>
                                <th class="v5" style="text-align: center">Ngày đặt</th>
                                <th class="v6" style="text-align: center">Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Ve as $v)
                                <tr>
                                    <td class="v1" style="text-align: center">{{$v->mave}}</td>
                                    <td class="v2" style="text-align: center">{{$v->name}}</td>
                                    <td class="v3" style="text-align: center">{{$v->machuyenbay}}</td>
                                    <td class="v4" style="text-align: center">{{$v->maloaive}}</td>
                                    <td class="v5" style="text-align: center">{{ date('d,M, Y', strtotime($v->ngaymua)) }}</td>
                                    <td class="v6" style="text-align: center">{{$v->trangthai}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- partial -->
@endsection
