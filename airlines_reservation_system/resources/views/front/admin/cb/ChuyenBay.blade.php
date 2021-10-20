@extends('front.layout.admin')

@section('title', 'ADMIN-ChuyenBay')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Chuyến Bay</h2>
                            <form action="{{url(('searchCB'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addCB" class="btn btn-success pull-right">Thêm Bản Ghi Mới</a>
                        </div>
                        <table class='table table-bordered table-striped'>
                            <thead>
                            <tr>
                                <th class="cb1" style="text-align: center">Mã Chuyến Bay</th>
                                <th class="cb2" style="text-align: center">Điểm Xuất Phát</th>
                                <th class="cb3" style="text-align: center">Điểm Đến</th>
                                <th class="cb4" style="text-align: center">Ngày Bay</th>
                                <th class="cb5" style="text-align: center">Ngày Đến</th>
                                <th class="cb6" style="text-align: center">Giờ Bay</th>
                                <th class="cb7" style="text-align: center">Giờ Hạ Cánh</th>
                                <th class="cb8" style="text-align: center">Mã Máy Bay</th>
                                <th class="cb9" style="text-align: center">Giá Vé</th>
                                <th class="cb10" style="text-align: center">Ngày Đăng</th>
                                <th class="cb11" style="text-align: center">Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($CB as $cb)
                                <tr>
                                    <td class="cb1" style="text-align: center">{{$cb->machuyenbay}}</td>
                                    <td class="cb2" style="text-align: center">{{$cb->diemxuatphat}}</td>
                                    <td class="cb3" style="text-align: center">{{$cb->diemden}}</td>
                                    <td class="cb4" style="text-align: center">{{date('d,M, Y', strtotime($cb->ngaybay))}}</td>
                                    <td class="cb5" style="text-align: center">{{date('d,M, Y', strtotime($cb->ngayHC))}}</td>
                                    <td class="cb6" style="text-align: center">{{$cb->giobay}}</td>
                                    <td class="cb7" style="text-align: center">{{$cb->giohacanh}}</td>
                                    <td class="cb8" style="text-align: center">{{$cb->mamaybay}}</td>
                                    <td class="cb9" style="text-align: center">{{$cb->giave}}</td>
                                    <td class="cb10" style="text-align: center">{{ date('d,M, Y', strtotime($cb->created_at)) }}</td>
                                    <td class="cb11" style="text-align: center">
                                        <a href='{{url("deleteCB",["id"=>$cb->id])}}' title='Delete Record'
                                           data-toggle='tooltip'>
                                            <span class='glyphicon glyphicon-trash'></span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
@endsection
