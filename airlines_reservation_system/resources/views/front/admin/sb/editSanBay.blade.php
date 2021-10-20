@extends('front.layout.admin')

@section('title', 'UPDATE-SanBay')

@section('content')
    <!-- partial -->
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Chỉnh Sửa Sân Bay</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Tên Sân Bay</label>
                                        <input type="text" name="tensanbay" class="form-control" value="{{$SB->tensanbay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Mã Chuyến Bay</label>
                                        <input type="text" name="machuyenbay" class="form-control" value="{{$SB->machuyenbay}}">
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
