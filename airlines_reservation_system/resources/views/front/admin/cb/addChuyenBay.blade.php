@extends('front.layout.admin')

@section('title', 'ADD_ChuyenBay')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>   Thêm Mới Một Chuyến Bay</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Mã Chuyến Bay</label>
                                        <input type="text" name="machuyenbay" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm Xuât Phát</label>
                                        <input type="text" name="diemxuatphat" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm Đến</label>
                                        <input type="text" name="diemden" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Bay</label>
                                        <input type="date" name="ngaybay" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày Về</label>
                                        <input type="date" name="ngayden" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Bay</label>
                                        <input type="time" name="giobay" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ Hạ Cánh</label>
                                        <input type="time" name="giohacanh" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Mã Máy Bay</label>
                                        <input type="text" name="mamaybay" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá Vé</label>
                                        <input type="text" name="giave" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
@endsection

