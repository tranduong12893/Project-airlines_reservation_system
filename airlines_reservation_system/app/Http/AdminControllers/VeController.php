<?php

namespace App\Http\AdminControllers;

use App\Models\Ve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VeController extends Controller
{
    public function AdminVe(){
        $Ve = DB::table('hoadon')
            ->join('ve', 'hoadon.mave', '=', 've.mave')
            ->join('thongtinkhachhang', 'hoadon.maKH', '=', 'thongtinkhachhang.maKH')
            ->join('chuyenbay', 've.machuyenbay', '=', 'chuyenbay.machuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->select('*')
            ->get();
        return view('front.admin.ve.Ve',compact('Ve'));

    }

    public function viewadd(){
        return view('front.admin.ve.addVe');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'mave'=>'required',
            'mathanhvien'=>'required',
            'machuyenbay'=>'required',
            'maloaive'=>'required',


        ]);


        $data= new Ve();
        $data->mave=$request->mave;
        $data->mathanhvien=$request->mathanhvien;
        $data->machuyenbay=$request->machuyenbay;
        $data->maloaive=$request->maloaive;
        $data->madichvu=$request->madichvu;
        $data->save();

        return Redirect::to('/adminVe');
    }

    public function DeleteRecord($id)
    {
        $del = Ve::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminVe");
    }

    public function viewedit($id){
        $Ve = Ve::findOrFail($id);
        return view('front.admin.ve.editVe',compact('Ve'));
    }


    public function UpdateRecord(Request $request,$id)
    {

        $request->validate([
            'mave' => 'required',
            'mathanhvien' => 'required',
            'machuyenbay' => 'required',
            'maloaive' => 'required',
            'madichvu' => 'required',


        ]);

        $data = Ve:: FindOrFail($id);
        $data->mave = $request->mave;
        $data->mathanhvien = $request->mathanhvien;
        $data->machuyenbay = $request->machuyenbay;
        $data->maloaive = $request->maloaive;
        $data->madichvu = $request->madichvu;
        $data->save();
        return Redirect::to('/adminVe');

    }
    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $Ve = Ve::where('mave','LIKE','%'.$name.'%')
                        ->orwhere('mathanhvien','LIKE','%'.$name.'%')
                        ->orwhere('machuyenbay','LIKE','%'.$name.'%')
                        ->orwhere('maloaive','LIKE','%'.$name.'%')->paginate(5);

        }
        return view('front.admin.ve.Ve',compact('Ve'));
    }
}
