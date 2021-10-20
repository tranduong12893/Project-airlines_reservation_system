@extends('front.layout.admin')

@section('title', 'ADMIN-MayBay')

@section('content')

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Máy Bay</h2>
                            <form action="{{url(('searchMB'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addMB" class="btn btn-success pull-right">Thêm Bản Ghi Mới</a>
                        </div>
                        <table class='table table-bordered table-striped'>
                            <thead>
                            <tr>

                                <th style="text-align: center">Mã Máy Bay</th>
                                <th style="text-align: center">Hãng Máy Bay</th>
                                <th style="text-align: center">First class</th>
                                <th style="text-align: center">Buseness</th>
                                <th style="text-align: center">Promo</th>
                                <th style="text-align: center">Economy</th>
                                <th style="text-align: center">Ngày Đăng</th>
                                <th style="text-align: center">Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($MB as $mb)
                                <tr>
                                    <td class="c1" style="text-align: center">{{$mb->mamaybay}}</td>
                                    <td class="c2" style="text-align: center">{{$mb->hangmaybay}}</td>
                                    <td class="c3" style="text-align: center">{{$mb->firstclass}}</td>
                                    <td class="c4" style="text-align: center">{{$mb->buseness}}</td>
                                    <td class="c5" style="text-align: center">{{$mb->promo}}</td>
                                    <td class="c6" style="text-align: center">{{$mb->economy}}</td>
                                    <td class="sb3" style="text-align: center">{{ date('M d, Y', strtotime($mb->created_at)) }}</td>
                                    <td class="c7" style="text-align: center">

                                        <a href='{{url("deleteMB",["id"=>$mb->id])}}' title='Delete Record'
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
