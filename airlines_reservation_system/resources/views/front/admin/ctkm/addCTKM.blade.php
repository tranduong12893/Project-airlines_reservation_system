
@extends('front.layout.admin')

@section('title', 'ADD-ChuongTrinhKhuyenMai')

@section('content')


            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h2>Thêm Mới Chương Trình Khuyến Mãi </h2>
                                </div>
                                <div class="nhap">
                                    <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label style="font-size: 15px">Tiêu Đề</label>
                                            <input type="text" name="tieude" class="form-control" value="">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group ">
                                            <label style="font-size: 15px">Lời Dẫn</label>
                                            <textarea rows="10" cols="100"  name="loidan" class="form-control" style="white-space: break-spaces;" ></textarea>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Nội Dung</label>
                                            <textarea rows="15" cols="100" name="noidung"  class="form-control" style=" white-space: break-spaces;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size: 15px">Ảnh</label>
                                            <input type="file" name="anh" value="">
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



