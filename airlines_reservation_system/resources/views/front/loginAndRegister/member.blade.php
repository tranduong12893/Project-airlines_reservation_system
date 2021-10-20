@extends('front.layout.master')
@section('title', 'Thông tin đơn hàng')

@section('body')

<div class="main_layout">
    <div class="vmb-homepage">
        <div class="min-vh-100">
            <div class="container my-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="user-profile mb-2">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active d-flex justify-content-start align-items-center text-dark" href="{{url('/update')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        <span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex justify-content-start align-items-center text-dark" href="{{url('/member')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <span>Đơn hàng của tôi</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h5>Danh sách đơn hàng</h5><hr>
                        <div class="mt-4">
                            <table class="w-100 customer-order-tbl">
                                <tbody style="text-align:center;border: #ffa300 solid 2px">
                                <tr >
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Mã vé</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Tên hành khách</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Điểm xuất phát</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Điểm đến</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Ngày bay</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Giờ bay</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Giờ hạ cánh</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Hãng</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Ngày mua</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px ">Trạng thái</th>
                                    <th style="text-align:center;border:#5F5D4D solid 1px "></th>
                                </tr>

                                @foreach($mem as $m)
                                    <tr>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->mave}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->name}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->diemxuatphat}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->diemden}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{date('d,M, Y', strtotime($m->ngaybay))}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->giobay}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->giohacanh}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->hangmaybay}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{date('d,M, Y', strtotime($m->ngaymua))}}</th>
                                        <th style="border:#5F5D4D solid 1px ">{{$m->trangthai}}</th>
                                        <th style="border:#5F5D4D solid 1px ">
                                            <form action="/member/{{$m->mave}}">
                                                <button type="submit" class="btn" style="background-color: #ffa300">Hủy</button>
                                            </form>
                                        </th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
