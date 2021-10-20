
@extends('front.layout.admin')

@section('title', 'UPDATE-CamNang')

@section('content')
            <div class="content-wrapper">
        <div class="row">
            <div class="wrapper1">
                <div class="container_fluid">
                    <div class="row">
                        <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                            <h2>Chỉnh sửa cẩm nang du lịch</h2>
                        </div>
                        <div class="nhap">
                            <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group" style="width: 500px">
                                    <label style="font-size: 15px">Tiêu Đề</label>
                                    <input type="text" name="tieude" class="form-control" value="{{$CN->tieude}}">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group ">
                                    <label style="font-size: 15px">Lời Dẫn</label>
                                    <input style="white-space: break-spaces;height: 100px" type="text" name="loidan" class="form-control" value="{{$CN->loidan}}">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 15px">Nội Dung</label>
                                    <input style="white-space: break-spaces;height: 200px" name="noidung" class="form-control" value="{{$CN->noidung}}" >
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 15px">Ảnh</label>
                                    <input type="file" name="anh" class="form-control" value="{{$CN->anh}}">
                                    <span class="help-block"></span>
                                </div>
                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


