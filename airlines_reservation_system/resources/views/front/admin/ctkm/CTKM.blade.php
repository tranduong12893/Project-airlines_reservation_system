@extends('front.layout.admin')

@section('title', 'ADMIN-ChuongTrinhKhuyenMai')

@section('content')

    <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Chương Trình Khuyến Mãi</h2>
                            <form action="{{url(('searchCTKM'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addCTKM" class="btn btn-success pull-right">Thêm Bản Ghi Mới</a>
                        </div>
                        <table class='table table-bordered table-striped'>
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
                            @foreach($KM as $km)
                                <tr>
                                    <td class="c1" style="text-align: center">{{$km->tieude}}</td>
                                    <td class="c2" style="text-align: center;width: 250px; white-space: break-spaces">{{$km->loidan}}</td>
                                    <td class="c3" style="text-align: center; width: 400px; white-space: break-spaces">{{$km->noidung}}</td>
                                    <td class="c4" style="text-align: center"><img src="front/img/khuyenmai/{{$km->anh}}" width="120px" height="120px"/>
                                    </td>
                                    <td class="c5" style="text-align: center">{{ date('d,M ,Y', strtotime($km->created_at)) }}</td>

                                    <td class="c6" style="text-align: center">

                                        <a href='{{url("deleteCTKM",["id"=>$km->id])}}' title='Delete Record'
                                           data-toggle='tooltip'>
                                            <span class='glyphicon glyphicon-trash'></span></a>
                                        <a href='{{url("editCTKM",["id"=>$km->id])}}' title='Edit Record'
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
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
@endsection
