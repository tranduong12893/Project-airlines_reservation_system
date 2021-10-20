@extends('front.layout.admin')

@section('title', 'ADMIN-SanBay')

@section('content')

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Sân Bay</h2>
                            <form action="{{url(('searchSB'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addSB" class="btn btn-success pull-right">Thêm Bản Ghi Mới</a>
                        </div>
                        <table class='table sb table-bordered table-striped'>
                            <thead >
                            <tr>
                                <th class="sb1" style="text-align: center">Tên sân bay</th>
                                <th class="sb2" style="text-align: center">Mã sân bay</th>
                                <th class="sb3" style="text-align: center">Ngày đăng</th>
                                <th class="sb4" style="text-align: center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($SB as $sb)
                                <tr>
                                    <td class="sb1" style="text-align: center">{{$sb->tensanbay}}</td>
                                    <td class="sb2" style="text-align: center">{{$sb->masanbay}}</td>
                                    <td class="sb3" style="text-align: center">{{ date('d,M, Y', strtotime($sb->created_at)) }}</td>
                                    <td class="sb4" style="text-align: center">
                                        <a href='{{url("deleteSB",["id"=>$sb->id])}}' title='Delete Record'
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
