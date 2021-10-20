
@extends('front.layout.admin')

@section('title', 'ADD-DichVu')

@section('content')
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Thêm Mới Dịch Vụ</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Mã Dịch Vụ</label>
                                        <input type="text" name="madichvu" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Tên Dịch Vụ</label>
                                        <textarea type="text" name="tendichvu" class="form-control" value=""></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội Dung Dịch Vụ</label>
                                        <textarea rows="15" cols="100" type="text" name="noidung" class="form-control" value="" style=" white-space: break-spaces;"></textarea>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Phí Dịch Vụ</label>
                                        <textarea type="text" name="phidichvu" class="form-control" value=""></textarea>
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



