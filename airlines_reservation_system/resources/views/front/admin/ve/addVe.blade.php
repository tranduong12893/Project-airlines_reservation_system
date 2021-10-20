
@extends('front.layout.admin')

@section('title', 'ADD-Ve')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header"  style="margin-left: 8px; width: 100%; text-align: center">
                                    <h2>Thêm mới một vé máy bay</h2>
                                </div>
                                <div class="nhap" >
                                    <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label style="font-size: 15px">Mã Vé</label>
                                            <input type="text" name="mave" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group ">
                                            <label style="font-size: 15px">Mã Thành Viên</label>
                                            <input type="text" name="mathanhvien" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Mã Chuyến Bay</label>
                                            <input type="text" name="machuyenbay" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Mã Loại Vé</label>
                                            <input type="text" name="maloaive" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Mã Dịch Vụ</label>
                                            <input type="text" name="madichvu" class="form-control" value="">
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



