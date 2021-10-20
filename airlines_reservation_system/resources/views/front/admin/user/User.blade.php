@extends('front.layout.admin')

@section('title', 'ADMIN-User')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">User</h2>
                            <form action="{{url(('searchUser'))}} " method="post" style="margin-left: 300px">
                                {{csrf_field()}}
                                <input type="text" name="name"/>
                                <input type="submit" value="Search">
                            </form>
                            <a href="\addUser" class="btn btn-success pull-right add1">Thêm bản ghi mới</a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="v1" style="text-align: center">Name</th>
                                <th class="v2" style="text-align: center">Email</th>
                                <th class="v3" style="text-align: center">DOB</th>
                                <th class="v4" style="text-align: center">Phone</th>
                                <th class="v7" style="text-align: center">Address</th>
                                <th class="v8" style="text-align: center">Gender</th>
                                <th class="v10" style="text-align: center">Role</th>
                                <th class="v5" style="text-align: center">Ngày Đăng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($User as $user)
                                <tr>
                                    <td class="v1" style="text-align: center">{{$user->name}}</td>
                                    <td class="v2" style="text-align: center">{{$user->email}}</td>
                                    <td class="v3" style="text-align: center">{{ date('d,M, Y', strtotime($user->DOB)) }}</td>
                                    <td class="v4" style="text-align: center">{{$user->phone}}</td>
                                    <td class="v7" style="text-align: center">{{$user->address}}</td>
                                    <td class="v8" style="text-align: center">{{$user->gender}}</td>
                                    <td class="v10" style="text-align: center">{{$user->role}}</td>
                                    <td class="v5" style="text-align: center">{{ date('d,M, Y', strtotime($user->created_at)) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
