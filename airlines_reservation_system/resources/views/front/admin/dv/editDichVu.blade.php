
@extends('front.layout.admin')

@section('title', 'UPDATE-DichVu')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Chỉnh Sửa Dịch Vụ</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Mã Dịch Vụ</label>
                                        <input type="text" name="madichvu" class="form-control" value="{{$DV->madichvu}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Tên Dịch Vụ</label>
                                        <textarea type="text" name="tendichvu" class="form-control">{{$DV->tendichvu}}</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội Dung Dịch Vụ</label>
                                        <textarea type="text" name="noidung" class="form-control" >{{$DV->noidung}}</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Phí Dịch Vụ</label>
                                        <textarea type="text" name="phidichvu" class="form-control" >{{$DV->phidichvu}}</textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
@endsection
