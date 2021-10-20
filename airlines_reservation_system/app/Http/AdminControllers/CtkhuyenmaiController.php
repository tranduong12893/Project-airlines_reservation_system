<?php

namespace App\Http\AdminControllers;

use App\Models\CtKhuyenMai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CtkhuyenmaiController extends Controller
{
    public function AdminKM(){
        $KM = CtKhuyenMai::all()->sortByDesc("id");;
        return view('front.admin.ctkm.CTKM',compact('KM'));

    }

    public function viewadd(){
        return view('front.admin.ctkm.addCTKM');
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

            $data= new CtKhuyenMai();
            $data->tieude=$request->tieude;
            $data->loidan=$request->loidan;
            $data->noidung=$request->noidung;
            $data->anh=$file_name;
            $data->save();

        return Redirect::to('/adminCTKM');
    }

    public function DeleteRecord($id){
        $del = CtKhuyenMai::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminCTKM");
    }

    public function viewedit($id){
        $KM = CtKhuyenMai::FindOrFail($id);
        return view('front.admin.ctkm.editCTKM',compact('KM'));
    }

    public function UpdateRecord(Request $request,$id){


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

        $data = CtKhuyenMai::FindOrFail($id);
        $data->tieude=$request->tieude;
        $data->loidan=$request->loidan;
        $data->noidung=$request->noidung;
        $data->anh=$file_name;
        $data->save();
        return Redirect::to("/adminCTKM");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $KM = CtKhuyenMai::where('tieude','LIKE','%'.$name.'%')->paginate(5);
//                        ->orwhere('loidan','LIKE','%'.$name.'%')

        }
        return view('front.admin.ctkm.CTKM',compact('KM'));


    }
}
