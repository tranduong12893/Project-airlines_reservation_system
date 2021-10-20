<?php

namespace App\Http\AdminControllers;

use App\Models\CtKhuyenMai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnValue;

class DichVuController extends Controller
{
    public function Admindichvu(){
        $DV = DichVu::all();
        return view('front.admin.DichVu',compact('DV'));

    }

    public function viewadd(){
        return view('front.admin.addDichVu');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'madichvu'=>'required',
            'tendichvu'=>'required',
            'phidichvu'=>'required',

        ]);


        $data= new dichvu();
        $data->madichvu=$request->madichvu;
        $data->tendichvu=$request->tendichvu;
        $data->phidichvu=$request->phidichvu;
        $data->save();

        return Redirect::to('/adminDichVu');
    }

    public function DeleteRecord($id){
        $del = dichvu::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminDichVu");
    }

    public function viewedit($id){
        $dichvu = dichvu::FindOrFail($id);
        return view('front.admin.editDichVu',compact('DV'));
    }

    public function UpdateRecord(Request $request,$id){


        $request->validate([
            'madichvu'=>'required',
            'tendichvu'=>'required',
            'phidichvu'=>'required',

        ]);


        $data = dichvu::FindOrFail($id);
        $data->madichvu=$request->madichvu;
        $data->tendichvu=$request->tendichvu;
        $data->phidichvu=$request->phidichvu;
        $data->save();
        return Redirect::to("/adminDichVu");
    }

}
