<?php

namespace App\Http\Controllers;

use App\Models\CtKhuyenMai;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function ShowKhuyenMai(){
        $ctkhuyenmai =  CtKhuyenMai::all()->sortByDesc("id");;
        return view('front.trangPhu.khuyenmai',compact('ctkhuyenmai'));

    }
    public function  NDKhuyenMai($id){
        $ctkhuyenmais =  CtKhuyenMai::findOrFail($id);
        $ctkhuyenmai =  CtKhuyenMai::all();
        return view('front.trangPhu.NDctkhuyenmai',compact('ctkhuyenmais','ctkhuyenmai'));
    }
}
