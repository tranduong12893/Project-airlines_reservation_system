<?php


namespace App\Http\Controllers;
use App\Models\ChuyenBay;
use App\Models\MayBay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

//    public function search(Request $request){
//        $diemdi = $request->diemdi ?? '';
//        $diemden = $request->diemden ?? '';
//        $ngaydi = $request->ngaydi ?? '';
//
//
//        $hang = $request -> hang ?? DB::table('chuyenbay')
//                ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
//                ->select('hangmaybay')
//                ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
//                ->where('diemden', 'like','%'.$diemden.'%')
//                ->where('ngaybay', 'like', '%'.$ngaydi.'%')
//                ->get();
//
//        if($hang == DB::table('chuyenbay')
//                ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
//                ->select('hangmaybay')
//                ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
//                ->where('diemden', 'like','%'.$diemden.'%')
//                ->where('ngaybay', 'like', '%'.$ngaydi.'%')
//                ->get()){
//            $ve = DB::table('chuyenbay')
//                ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
//                ->select('*')
//                ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
//                ->where('diemden', 'like','%'.$diemden.'%')
//                ->where('ngaybay', 'like', '%'.$ngaydi.'%')
//                ->get();
//        }else{
//            $ve = DB::table('chuyenbay')
//                ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
//                ->select('*')
//                ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
//                ->where('diemden', 'like','%'.$diemden.'%')
//                ->where('ngaybay', 'like', '%'.$ngaydi.'%')
//                ->where('hangmaybay', 'like', '%'.$hang.'%')
//                ->get();
//        }
//
//        $sortby = $request -> sortby ?? 'price';
//        switch ($sortby){
//            case 'price':
//                $ve = $ve -> sortBy('giave');
//                break;
//            case 'start-time':
//                $ve = $ve -> sortBy('giobay');
//                break;
//            case 'end-time':
//                $ve = $ve -> sortBy('giohacanh');
//                break;
//            case 'fly-time':
//                $ve = $ve -> sortBy(DATEDIFF(minutes, 'ngaybay', 'ngayhc'));
//                break;
//        }
//
//        return view('front/datVe/chonchuyen', compact('ve', 'hang'));
//    }

    public function search(Request $request){
        $diemdi = $request->diemdi ?? '';
        $diemdi2 = $request->diemden ?? '';
        $diemden = $request->diemden ?? '';
        $diemden2 = $request->diemdi ?? '';
        $ngaydi = $request->ngaydi ?? '';
        $ngaydi2 = $request->ngayve ?? '';
        $loai = $request -> loai ?? 'motchieu';

        //$soluong = $request -> soluong ?? 1;

        if($loai == 'motchieu'){
            $hang = $request -> hang ?? DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
                    ->where('diemden', 'like','%'.$diemden.'%')
                    ->where('ngaybay', 'like', '%'.$ngaydi.'%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();

            if($hang == DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
                    ->where('diemden', 'like','%'.$diemden.'%')
                    ->where('ngaybay', 'like', '%'.$ngaydi.'%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get()){
                $ve = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
                    ->where('diemden', 'like','%'.$diemden.'%')
                    ->where('ngaybay', 'like', '%'.$ngaydi.'%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
                $ve2 = array();
                $hang2 = array();
            }else{
                $ve = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%'.$diemdi.'%')
                    ->where('diemden', 'like','%'.$diemden.'%')
                    ->where('ngaybay', 'like', '%'.$ngaydi.'%')
                    ->where('hangmaybay', 'like', '%'.$hang.'%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
                $ve2 = array();
                $hang2 = array();
            }

            $sortby = $request -> sortby ?? 'price';
            switch ($sortby) {
                case 'price':
                    $ve = $ve->sortBy('giave');
                    break;
                case 'start-time':
                    $ve = $ve->sortBy('giobay');
                    break;
                case 'end-time':
                    $ve = $ve->sortBy('giohacanh');
                    break;
                case 'fly-time':
                    $ve = $ve->sortBy(DATEDIFF(minutes, 'ngaybay', 'ngayhc'));
                    break;
            }
            return view('front/datVe/chonchuyen', compact('ve', 'hang', 'loai', 've2', 'hang2'));
        }else {
            $hang = $request->hang ?? DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%' . $diemdi . '%')
                    ->where('diemden', 'like', '%' . $diemden . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            $hang2 = $request->hang ?? DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%' . $diemdi2 . '%')
                    ->where('diemden', 'like', '%' . $diemden2 . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi2 . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            if ($hang == DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%' . $diemdi . '%')
                    ->where('diemden', 'like', '%' . $diemden . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get()) {
                $ve = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%' . $diemdi . '%')
                    ->where('diemden', 'like', '%' . $diemden . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            } else {
                $ve = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%' . $diemdi . '%')
                    ->where('diemden', 'like', '%' . $diemden . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi . '%')
                    ->where('hangmaybay', 'like', '%' . $hang . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            }

            if ($hang2 == DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('hangmaybay')
                    ->where('diemxuatphat', 'like', '%' . $diemdi2 . '%')
                    ->where('diemden', 'like', '%' . $diemden2 . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi2 . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get()) {
                $ve2 = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%' . $diemdi2 . '%')
                    ->where('diemden', 'like', '%' . $diemden2 . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi2 . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            } else {
                $ve2 = DB::table('chuyenbay')
                    ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                    ->select('*')
                    ->where('diemxuatphat', 'like', '%' . $diemdi2 . '%')
                    ->where('diemden', 'like', '%' . $diemden2 . '%')
                    ->where('ngaybay', 'like', '%' . $ngaydi2 . '%')
                    ->where('hangmaybay', 'like', '%' . $hang2 . '%')
                    ->where('tongsoghe', '>', '0')
                    //->where('tongsoghe', '>=', ''. $soluong.'')
                    ->get();
            }
            $sortby = $request->sortby ?? 'price';
            switch ($sortby) {
                case 'price':
                    $ve = $ve->sortBy('giave');
                    break;
                case 'start-time':
                    $ve = $ve->sortBy('giobay');
                    break;
                case 'end-time':
                    $ve = $ve->sortBy('giohacanh');
                    break;
                case 'fly-time':
                    $ve = $ve->sortBy(DATEDIFF(minutes, 'di', 'hc'));
                    break;
            }

            $sortby2 = $request->sortby ?? 'price';
            switch ($sortby2) {
                case 'price':
                    $ve2 = $ve2->sortBy('giave');
                    break;
                case 'start-time':
                    $ve2 = $ve2->sortBy('giobay');
                    break;
                case 'end-time':
                    $ve2 = $ve2->sortBy('giohacanh');
                    break;
                case 'fly-time':
                    $ve2 = $ve2->sortBy(DATEDIFF(minutes, 'di', 'hc'));
                    break;
            }

            return view('front/datVe/chonchuyen', compact('ve', 'hang', 've2', 'hang2', 'loai'));
        }
    }

}
