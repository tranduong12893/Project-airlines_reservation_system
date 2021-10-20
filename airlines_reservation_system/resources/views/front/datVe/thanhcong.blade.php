@extends('front.layout.master')

@section('title', 'Thanh cong')

@section('body')
    <div class="main_layout">
        <div class="vmb-homepage">
            <div class="container">
                <h1>Ban da dat ve thanh cong. Tai khoan va mat khau mac dinh chinh la email va so dien thoai cua ban</h1>
                <div class="mt-4">
                    <table class="w-100 customer-order-tbl">
                        <tbody>
                        @foreach($mem as $m)
                            <form>
                                <div class="form-group">
                                    <label for="name">Tên khách hàng</label>
                                    <p style="font-size: 20px"><strong>{{$m->name}}</strong></p>
                                </div>
                                <table>
                                    <tr>
                                        <th style="width: 200px"><label>Điểm xuất phát</label><br/>
                                            <strong>{{$m->diemxuatphat}}</strong></th>
                                        <th style="margin-left: 50px"><label>Điểm đến</label><br/>
                                            <strong>{{$m->diemden}}</strong></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 200px"><label>Giờ bay</label><br/>
                                            <strong>{{$m->giobay}}</strong></th>
                                        <th style="margin-left: 50px"><label>Giờ hạ cánh</label><br/>
                                            <strong>{{$m->giohacanh}}</strong></th>
                                    </tr>
                                </table>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hãng máy bay</label>
                                    <p><strong>{{$m->hangmaybay}}</strong></p>
                                </div>
                            </form>
                            @break
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
