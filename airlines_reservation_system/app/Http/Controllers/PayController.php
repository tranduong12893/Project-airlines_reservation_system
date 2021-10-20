<?php


namespace App\Http\Controllers;


use App\Models\ChonChuyen;
use App\Models\ChuyenBay;
use App\Models\HoaDon;
use App\Models\ThongTinKhachHang;
use App\Models\User;
use App\Models\Ve;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PayController extends BaseController
{
    public function Select1($machuyenbay)
    {
        $ve = ChuyenBay::findOrFail($machuyenbay);

        ChonChuyen::add([
            'machuyenbay' => $machuyenbay,
            'diemxuatphat' => $ve->diemxuatphat,
            'diemden' => $ve->diemden,
            'ngaybay' => $ve->ngaybay,
            'ngayHC' => $ve->ngayHC,
            'giobay' => $ve->giobay,
            'giohacanh' => $ve->giohacanh,
            'hang' => $ve->hangmaybay,
            'gia' => $ve->giave
        ]);

        return back();
    }

    public function Select2($machuyenbay)
    {
        $ve = DB::table('chuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->select('*')
            ->where('machuyenbay', 'like', '%' . $machuyenbay . '%')
            ->get();
//        $ve = ChuyenBay::findOrFail($machuyenbay);
        $tao = new ChonChuyen();

        $tao->machuyenbay = $machuyenbay;
        $tao->diemxuatphat = $ve[0]->diemxuatphat;
        $tao->diemden = $ve[0]->diemden;
        $tao->ngaybay = $ve[0]->ngaybay;
        $tao->ngayHC = $ve[0]->ngayHC;
        $tao->giobay = $ve[0]->giobay;
        $tao->giohacanh = $ve[0]->giohacanh;
        $tao->hangmaybay = $ve[0]->hangmaybay;
        $tao->gia = $ve[0]->giave;
        $tao->save();

        $select = ChonChuyen::all();

        $loaive = DB::table('chuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->select('*')
            ->where('machuyenbay', 'like', '%' . $machuyenbay . '%')
            ->get();

        return view('front/datVe/thanhtoan', compact('select', 'loaive'));
    }

    public function Show(Request $request)
    {
        $select = ChonChuyen::all();
        $loai = $request->loai ?? 'economy';
        switch ($loai) {
            case 'economy':
                $update = ChonChuyen::find($select[0]->machuyenbay);
                $update->gia = $select[0]->gia;
                $update->save();
                break;
            case 'promo':
                $update = ChonChuyen::find($select[0]->machuyenbay);
                $update->gia = $select[0]->gia + 100000;
                $update->save();
                break;
            case 'business':
                $update = ChonChuyen::find($select[0]->machuyenbay);
                $update->gia = $select[0]->gia + 200000;
                $update->save();
                break;
            case 'firstclass':
                $update = ChonChuyen::find($select[0]->machuyenbay);
                $update->gia = $select[0]->gia + 300000;
                $update->save();
                break;
        }
        $loaive = DB::table('chuyenbay')
            ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
            ->where('machuyenbay', 'like', '%' . $select[0]->machuyenbay . '%')
            ->get();

        return view('front/datVe/thanhtoan', compact('select', 'loaive'));
    }

    public function AddVe(Request $request)
    {
        $loai = $request->loai ?? 'economy';
        $select = ChonChuyen::all();
//        $maybay = DB::table('chuyenbay')
////            ->select('mamaybay')
//            ->where('machuyenbay', 'like', '%' . $select[0]->machuyenbay . '%')
//            ->get();

        if (!Auth::check()) {
            $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required',
                    'DOB' => 'required',
                    'phone' => 'required',
                    'address' => 'required',
                    'gender' => 'required',
                ]
            );

//        $userData = array_merge($request->except(['SignUpConfirmPassword']), ['role' => 2]);
//        $user = User::create($userData);
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'DOB' => $request->input('DOB'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'gender' => $request->input('gender'),
                'password' => Hash::make($request->input('phone')),
                'role' => '2',
            ]);

            if ($user) {
                Auth::login($user);
            }
        }

        $thanhvien = ThongTinKhachHang::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'DOB' => $request->input('DOB'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'gender' => $request->input('gender'),
        ]);

        $ve = Ve::create([
            'id' => Auth::user()->id,
            'maKH' => $thanhvien->maKH,
            'machuyenbay' => $select[0]->machuyenbay,
            'maloaive' => $loai,
            'trangthai' => 'dadat'
        ]);

        $hoadon = HoaDon::create([
            'ngaymua' => Carbon::now(),
            'maKH' => $thanhvien->maKH,
            'mave' => $ve->mave,
            'giave' => $select[0]->gia
        ]);


//        $user = User::create(array_merge([$request->except(['SignUpComfirmPassword']), ['role' => 2]], $request->input()));

        if ($hoadon) {
//            $select->$this->delete();
            $delete = ChonChuyen::find($select[0]->id);
            $delete->delete();
            $mem = DB::table('hoadon')
                ->join('ve', 'hoadon.mave', '=', 've.mave')
                ->join('thongtinkhachhang', 'hoadon.maKH', '=', 'thongtinkhachhang.maKH')
                ->join('chuyenbay', 've.machuyenbay', '=', 'chuyenbay.machuyenbay')
                ->join('maybay', 'chuyenbay.mamaybay', '=', 'maybay.mamaybay')
                ->select('*')
                ->where('ve.id', 'like', '%'.Auth::user()->id.'%')
                ->where('ve.trangthai', '=', 'dadat')
                ->get();
            return view('/front/datVe/thanhcong', compact('mem'));
        }
    }

}
