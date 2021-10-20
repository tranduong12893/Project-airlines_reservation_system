<?php

namespace App\Http\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\CamNang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CamNangController extends Controller
{
    public function AdminCN(){
        $CN = CamNang::all()->sortByDesc("id");;
        return view('front.admin.camnang.CN',compact('CN'));

    }

    public function viewadd(){
        return view('front.admin.camnang.addCN');
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
        $path = 'front/img/camnang/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $data= new CamNang();
        $data->tieude=$request->tieude;
        $data->loidan=$request->loidan;
        $data->noidung=$request->noidung;
        $data->anh=$file_name;
        $data->save();

        return Redirect::to('/adminCN');
    }

    public function DeleteRecord($id){
        $del = CamNang::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminCN");
    }

    public function viewedit($id){
        $CN = CamNang::FindOrFail($id);
        return view('front.admin.camnang.editCN',compact('CN'));
    }

    public function UpdateRecord(Request $request,$id){


        $request->validate([
            'tieude'=>'required|max:200',
            'loidan'=>'required',
            'noidung'=>'required',
            'anh'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $fileup = $request->anh;
        $path = 'front/img/camnang/';
        $file_name = $fileup->getClientOriginalName();
        $fileup->move($path,$file_name);

        $data = CamNang::FindOrFail($id);
        $data->tieude=$request->tieude;
        $data->loidan=$request->loidan;
        $data->noidung=$request->noidung;
        $data->anh=$file_name;
        $data->save();
        return Redirect::to("/adminCN");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $CN = CamNang::where('tieude','LIKE','%'.$name.'%')->paginate(5);
//                        ->orwhere('loidan','LIKE','%'.$name.'%')

        }
        return view('front.admin.camnang.CN',compact('CN'));
    }
}
