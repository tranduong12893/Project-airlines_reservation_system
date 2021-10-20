
@extends('front.layout.admin')

@section('title', 'ADD-User')

@section('content')

            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h2>Thêm mới một người dùng</h2>
                                </div>
                                <div class="nhap">
                                    <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label style="font-size: 15px">Name</label>
                                            <input type="text" name="name" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group ">
                                            <label style="font-size: 15px">Email</label>
                                            <input type="text" name="email" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">DOB</label>
                                            <input type="date" name="DOB" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Address</label>
                                            <input type="text" name="address" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Gender</label>
                                            <input type="text" name="gender" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Password</label>
                                            <input type="text" name="password" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Role</label>
                                            <input type="text" name="role" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection



