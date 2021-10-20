@extends('front.layout.admin')

@section('title', 'UPDATE-ChuyenBay')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Chỉnh Sửa Chuyến Bay</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group ">
                                        <label>Mã Chuyến Bay</label>
                                        <input type="text" name="machuyenbay" class="form-control" value="{{$CB->machuyenbay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Điểm Xuất Phát</label>
                                        <input type="text" name="diemxuatphat" class="form-control" value="{{$CB->diemxuatphat}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm Đến</label>
                                        <input type="text" name="diemden" class="form-control" value="{{$CB->diemden}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Ngày Bay</label>
                                        <input type="text" name="ngaybay" class="form-control" value="{{$CB->ngaybay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Về</label>
                                        <input type="text" name="ngayden" class="form-control" value="{{$CB->ngayden}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Giờ Bay</label>
                                        <input type="text" name="giobay" class="form-control" value="{{$CB->giobay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Hạ Cánh</label>
                                        <input type="text" name="giohacanh" class="form-control" value="{{$CB->giohacanh}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Mã Máy Bay</label>
                                        <input type="text" name="mamaybay" class="form-control" value="{{$CB->mamaybay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Giá Vé</label>
                                        <input type="text" name="giave" class="form-control" value="{{$CB->giave}}">
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
