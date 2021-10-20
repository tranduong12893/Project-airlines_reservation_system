<?php

namespace App\Http\Controllers;

use App\Models\DiemDen;
use Illuminate\Http\Request;

class DiemDenController extends Controller
{
    //
    public function ShowDiemDen(){
        $diemdens = DiemDen::all()->sortByDesc("id");;
        return view('front/trangPhu/diemDenYeuThich', compact('diemdens'));
    }

    public function ShowND_DiemDen($id){
        $NDdiemden = DiemDen::findOrFail($id);
        $diemdens = DiemDen::all();
        return view('front/trangPhu/NDdiemden', compact('NDdiemden', 'diemdens'));
    }
}
