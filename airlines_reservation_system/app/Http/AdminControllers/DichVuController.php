<?php

namespace App\Http\AdminControllers;

use App\Models\DichVu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnValue;

class DichVuController extends Controller
{
    public function Admindichvu(){
        $DV = DichVu::all();
        return view('front.admin.dv.DichVu',compact('DV'));

    }

    public function viewadd(){
        return view('front.admin.dv.addDichVu');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'madichvu'=>'required',
            'tendichvu'=>'required',
            'noidung'=>'required',
            'phidichvu'=>'required',

        ]);


        $data= new dichvu();
        $data->madichvu=$request->madichvu;
        $data->tendichvu=$request->tendichvu;
        $data->noidung=$request->noidung;
        $data->phidichvu=$request->phidichvu;
        $data->save();

        return Redirect::to('/adminDV');
    }

    public function DeleteRecord($id){
        $del = dichvu::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminDV");
    }

    public function viewedit($id){
        $DV = dichvu::FindOrFail($id);
        return view('front.admin.dv.editDichVu',compact('DV'));
    }

    public function UpdateRecord(Request $request,$id){


        $request->validate([
            'madichvu'=>'required',
            'tendichvu'=>'required',
            'noidung'=>'required',
            'phidichvu'=>'required',

        ]);


        $data = dichvu::FindOrFail($id);
        $data->madichvu=$request->madichvu;
        $data->tendichvu=$request->tendichvu;
        $data->noidung=$request->noidung;
        $data->phidichvu=$request->phidichvu;
        $data->save();
        return Redirect::to("/adminDV");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $DV = DichVu::where('madichvu','LIKE','%'.$name.'%')
                        ->orwhere('tendichvu','LIKE','%'.$name.'%')->paginate(5);

        }
        return view('front.admin.dv.DichVu',compact('DV'));
    }

}
