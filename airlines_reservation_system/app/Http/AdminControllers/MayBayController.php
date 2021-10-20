<?php

namespace App\Http\AdminControllers;

use App\Models\CtKhuyenMai;
use App\Models\MayBay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnValue;

class MayBayController extends Controller
{
    public function AdminMB(){
        $MB = MayBay::all();
        return view('front.admin.mb.MayBay',compact('MB'));

    }

    public function viewadd(){
        return view('front.admin.mb.addMayBay');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'mamaybay'=>'required',
            'hangmaybay'=>'required',
            'firstclass'=>'required',
            'buseness'=>'required',
            'promo'=>'required',
            'economy'=>'required',

        ]);


        $data= new MayBay();
        $data->mamaybay=$request->mamaybay;
        $data->hangmaybay=$request->hangmaybay;
        $data->firstclass=$request->firstclass;
        $data->buseness=$request->buseness;
        $data->promo=$request->promo;
        $data->economy=$request->economy;
        $data->save();

        return Redirect::to('/adminMB');
    }

    public function DeleteRecord($id){
        $del = MayBay::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminMB");
    }

    public function viewedit($id){
        $MB = MayBay::FindOrFail($id);
        return view('front.admin.mb.editMayBay',compact('MB'));
    }

    public function UpdateRecord(Request $request,$id){


        $request->validate([
            'mamaybay'=>'required',
            'hangmaybay'=>'required',
            'firstclass'=>'required',
            'buseness'=>'required',
            'promo'=>'required',
            'economy'=>'required',


        ]);


        $data = MayBay::FindOrFail($id);
        $data->mamaybay=$request->mamaybay;
        $data->hangmaybay=$request->hangmaybay;
        $data->firstclass=$request->firstclass;
        $data->buseness=$request->buseness;
        $data->promo=$request->promo;
        $data->economy=$request->economy;
        $data->save();
        return Redirect::to("/adminMB");
    }

    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $MB = MayBay::where('mamaybay','LIKE','%'.$name.'%')
                        ->orwhere('hangmaybay','LIKE','%'.$name.'%')->paginate(5);

        }
        return view('front.admin.mb.MayBay',compact('MB'));
    }

}
