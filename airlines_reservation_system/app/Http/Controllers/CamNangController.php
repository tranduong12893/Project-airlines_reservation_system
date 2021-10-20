<?php

namespace App\Http\Controllers;

use App\Models\CamNang;
use Illuminate\Http\Request;

class CamNangController extends Controller
{
public function ShowCamNang(){
    $camnangs = CamNang::all()->sortByDesc("id");;
    return view('front.trangPhu.camnang', compact('camnangs'));
}
public function ShowNDCamNang($id){
    $ndcamnangs = CamNang::findOrFail($id);
    $ndcamnang = CamNang::all();
    return view('front.trangPhu.NDcamnang', compact('ndcamnangs', 'ndcamnang'));
}
}
