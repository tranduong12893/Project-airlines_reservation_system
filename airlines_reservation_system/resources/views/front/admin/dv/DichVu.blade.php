@extends('front.layout.admin')

@section('title', 'ADMIN-DichVu')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Dịch Vụ</h2>
                            <form action="{{url(('searchDV'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addDV" class="btn btn-success pull-right">Thêm Bản Ghi Mới</a>
                        </div>
                        <table class='table table-bordered table-striped'>
                            <thead>
                            <tr>

                                <th style="text-align: center">Mã Dịch Vụ</th>
                                <th style="text-align: center">Tên Dịch Vụ</th>
                                <th style="text-align: center">Phí Dịch Vụ</th>
                                <th style="text-align: center">Nội Dung Dịch Vụ</th>
                                <th style="text-align: center">Ngày Đăng</th>
                                <th style="text-align: center">Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($DV as $dv)
                                <tr>
                                    <td class="c1" style="text-align: center">{{$dv->madichvu}}</td>
                                    <td class="c2" style="text-align: center">{{$dv->tendichvu}}</td>
                                    <td class="c3" style="text-align: center; width: 300px; white-space: break-spaces">{{$dv->noidung}}</td>
                                    <td class="c4" style="text-align: center">{{$dv->phidichvu}}</td>
                                    <td class="sb3" style="text-align: center">{{ date('M d, Y', strtotime($dv->created_at)) }}</td>
                                    <td class="c5" style="text-align: center">
                                        <a href='{{url("deleteDV",["id"=>$dv->id])}}' title='Delete Record'
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
