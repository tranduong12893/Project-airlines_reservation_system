<?php

namespace App\Http\Controllers;

use App\Models\Ve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController
{
    public function showMember(){
        $mem = DB::table('hoadon')
            ->join('ve', 'hoadon.mave', '=', 've.mave')
            ->join('thongtinkhachhang', 'hoadon.maKH', '=', 'thongtinkhachhang.maKH')
            ->join('chuyenbay', 've.machuyenbay', '=', 'chuyenbay.machuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->select('*')
            ->where('ve.id', 'like', '%'.Auth::user()->id.'%')
            ->where('ve.trangthai', '=', 'dadat')
            ->get();
        return view('/front/loginAndRegister/member', compact('mem'));
    }

    public function cancel($mave){
//        $can = Ve::where('mave', 'like', ''.$mave.'');
//        $can->trangthai='huy';
//        $can->save();
        $can = Ve::find($mave);
        $can->update(array('trangthai'=>'huy'));
        $mem = DB::table('hoadon')
            ->join('ve', 'hoadon.mave', '=', 've.mave')
            ->join('thongtinkhachhang', 'hoadon.maKH', '=', 'thongtinkhachhang.maKH')
            ->join('chuyenbay', 've.machuyenbay', '=', 'chuyenbay.machuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->select('*')
            ->where('ve.id', 'like', '%'.Auth::user()->id.'%')
            ->where('ve.trangthai', '=', 'dadat')
            ->get();
        return view('/front/loginAndRegister/member', compact('mem'));
    }
}
