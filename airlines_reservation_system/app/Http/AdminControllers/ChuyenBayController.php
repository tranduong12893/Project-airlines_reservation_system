<?php

namespace App\Http\AdminControllers;

use App\Models\ChuyenBay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnValue;

class ChuyenBayController extends Controller
{
    public function AdminCB(){
        $CB = ChuyenBay::all();
        return view('front.admin.cb.ChuyenBay',compact('CB'));

    }

    public function viewadd(){
        return view('front.admin.cb.addChuyenBay');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'machuyenbay'=>'required',
            'diemxuatphat'=>'required',
            'diemden'=>'required',
            'ngaybay'=>'required',
            'ngayHC'=>'required',
            'giobay'=>'required',
            'giohacanh'=>'required',
            'mamaybay'=>'required',
            'giave'=>'required',

        ]);


        $data= new ChuyenBay();
        $data->machuyenbay=$request->machuyenbay;
        $data->diemxuatphat=$request->diemxuatphat;
        $data->diemden=$request->diemden;
        $data->ngaybay=$request->ngaybay;
        $data->ngayHC=$request->ngayHC;
        $data->giobay=$request->giobay;
        $data->giohacanh=$request->giohacanh;
        $data->mamaybay=$request->mamaybay;
        $data->giave=$request->giave;
        $data->save();
        return Redirect::to('/adminCB');
    }

    public function DeleteRecord($id){
        $del = ChuyenBay::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminCB");
    }

    public function viewedit($id){
        $CB = ChuyenBay::FindOrFail($id);
        return view('front.admin.cb.editChuyenBay',compact('CB'));
    }

    public function UpdateRecord(Request $request,$id){
        $request->validate([
            'machuyenbay'=>'required',
            'diemxuatphat'=>'required',
            'diemden'=>'required',
            'ngaybay'=>'required',
            'ngayHC'=>'required',
            'giobay'=>'required',
            'giohacanh'=>'required',
            'mamaybay'=>'required',
            'giave'=>'required',

        ]);


        $data = ChuyenBay::FindOrFail($id);
        $data->machuyenbay=$request->machuyenbay;
        $data->diemxuatphat=$request->diemxuatphat;
        $data->diemden=$request->diemden;
        $data->ngaybay=$request->ngaybay;
        $data->ngayHC=$request->ngayHC;
        $data->giobay=$request->giobay;
        $data->giohacanh=$request->giohacanh;
        $data->mamaybay=$request->mamaybay;
        $data->giave=$request->giave;
        $data->save();
        return Redirect::to("/adminCB");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $CB = ChuyenBay::where('machuyenbay','LIKE','%'.$name.'%')
                ->orwhere('diemxuatphat','LIKE','%'.$name.'%')
                ->orwhere('diemden','LIKE','%'.$name.'%')->paginate(5);

        }
        return view('front.admin.cb.ChuyenBay',compact('CB'));


    }
}
