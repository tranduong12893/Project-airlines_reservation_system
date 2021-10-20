@extends('front.layout.admin')

@section('title', 'ADD-MayBay')

@section('content')

            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Thêm Mới Máy Bay</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Mã Máy Bay</label>
                                        <input type="text" name="mamaybay" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Hãng Máy Bay</label>
                                        <textarea type="text" name="hangmaybay" class="form-control" value=""></textarea>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>First Class</label>
                                        <input type="text" name="firstclass" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Buseness Class</label>
                                        <input type="text" name="buseness" class="form-control" value="">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Promo Class</label>
                                        <input type="text" name="promo" class="form-control" value=""></input>
                                        <span class="help-block"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Economy Class</label>
                                        <textarea type="text" name="economy" class="form-control" value=""></textarea>
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
