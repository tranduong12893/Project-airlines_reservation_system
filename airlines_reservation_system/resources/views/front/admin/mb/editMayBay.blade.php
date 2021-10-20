
@extends('front.layout.second')

@section('title', 'UPDATE')

@section('body')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminUser')}}" aria-expanded="false" aria-controls="ui-basic">
                        <i class="iconify menu-icon" data-icon="fe:users" data-width="24"></i>
                        <span class="menu-title">User</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminVe')}}" aria-expanded="false" aria-controls="form-elements">
                        <i class="iconify menu-icon" data-icon="ion:ticket-sharp" data-width="24"></i>
                        <span class="menu-title">Vé</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminCB')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="fa-solid:plane-departure" data-width="24"></i>
                        <span class="menu-title">Chuyến bay</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminMB')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="bx:bxs-plane" data-width="24"></i>
                        <span class="menu-title">Máy bay</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminSB')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="mdi:airport" data-width="27"></i>
                        <span class="menu-title">Sân bay</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminDV')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="eos-icons:service-plan" data-width="24"></i>
                        <span class="menu-title">Dịch vụ</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminCN')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="bx:bx-book-bookmark" data-width="24"></i>
                        <span class="menu-title">Cẩm nang</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminDD')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="dashicons:location-alt" data-width="24"></i>
                        <span class="menu-title">Điểm đến</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="{{url('/adminCTKM')}}" aria-expanded="false" aria-controls="charts">
                        <i class="iconify menu-icon" data-icon="whh:sale" data-width="24"></i>
                        <span class="menu-title">Khuyến mãi</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="wrapper1">
                        <div class="container_fluid">
                            <div class="row">
                                <div class="page-header" style="margin-left: 8px; width: 100%; text-align: center">
                                    <h1>Chỉnh Sửa Máy Bay</h1>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" style="margin-left: 280px;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Mã Máy Bay</label>
                                        <input type="text" name="mamaybay" class="form-control" value="{{$MB->mamaybay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label>Hãng Máy Bay</label>
                                        <input type="text" name="hangmaybay" class="form-control" value="{{$MB->hangmaybay}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>First Class</label>
                                        <input type="text" name="firstclass" class="form-control" value="{{$MB->firstclass}}">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Buseness Class</label>
                                        <input type="text" name="buseness" class="form-control" value="{{$MB->buseness}}">
                                    <span class="help-block"></span>
                                    </div>
                                     <div class="form-group ">
                                        <label>Promo class</label>
                                        <input type="text" name="promo" class="form-control" value="{{$MB->promo}}" >
                                    <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Economy Class</label>
                                        <input type="text" name="economy" class="form-control" value="{{$MB->economy}}">
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
