<?php

namespace App\Http\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\DiemDen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DiemDenController extends Controller
{
    public function AdminDD(){
        $DD = DiemDen::all()->sortByDesc("id");;
        return view('front.admin.dd.DD',compact('DD'));

    }

    public function viewadd(){
        return view('front.admin.dd.addDD');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'tieude'=>'required|max:200',
            'loidan'=>'required',
            'noidung'=>'required',
            'anh'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $fileup = $request->anh;
        $path = 'front/img/khuyenmai/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $data= new DiemDen();
        $data->tieude=$request->tieude;
        $data->loidan=$request->loidan;
        $data->noidung=$request->noidung;
        $data->anh=$file_name;
        $data->save();

        return Redirect::to('/adminDD');
    }

    public function DeleteRecord($id){
        $del = DiemDen::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminDD");
    }

    public function viewedit($id){
        $DD = DiemDen::FindOrFail($id);
        return view('front.admin.dd.editDD',compact('DD'));
    }

    public function UpdateRecord(Request $request,$id){


        $request->validate([
            'tieude'=>'required|max:200',
            'loidan'=>'required',
            'noidung'=>'required',
            'anh'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $fileup = $request->anh;
        $path = 'front/img/diemden/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $data = DiemDen::FindOrFail($id);
        $data->tieude=$request->tieude;
        $data->loidan=$request->loidan;
        $data->noidung=$request->noidung;
        $data->anh=$file_name;
        $data->save();
        return Redirect::to("/adminDD");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $DD = DiemDen::where('tieude','LIKE','%'.$name.'%')->paginate(5);
//                        ->orwhere('loidan','LIKE','%'.$name.'%')

        }
        return view('front.admin.dd.DD',compact('DD'));


    }
}
