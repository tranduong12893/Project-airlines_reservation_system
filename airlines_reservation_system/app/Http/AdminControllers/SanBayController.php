<?php

namespace App\Http\AdminControllers;

use App\Models\SanBay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\returnValue;

class SanBayController extends Controller
{
    public function AdminSB()
    {
        $SB = SanBay::all();
        return view('front.admin.sb.SanBay', compact('SB'));

    }

    public function viewadd()
    {
        return view('front.admin.sb.addSanBay');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'tensanbay' => 'required',
            'masan' => 'required',
        ]);


        $data = new SanBay();
        $data->tensanbay = $request->tensanbay;
        $data->masanbay = $request->masanbay;
        $data->save();
        return Redirect::to('/adminSB');
    }

    public function DeleteRecord($id)
    {
        $del = SanBay::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminSB");
    }

    public function viewedit($id)
    {
        $SB = SanBay::FindOrFail($id);
        return view('front.admin.sb.editSanBay', compact('SB'));
    }

    public function UpdateRecord(Request $request, $id)
    {

        $request->validate([
            'tensanbay' => 'required',
            'masanbay' => 'required',
        ]);

        $data = SanBay::FindOrFail($id);
        $data->tensanbay = $request->tensanbay;
        $data->masanbay = $request->masanbay;
        $data->save();
        return Redirect::to("/adminSB");
    }

    public function search(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->get('name');
            $SB = SanBay::where('tensanbay', 'LIKE', '%' . $name . '%')
                ->orwhere('masanbay', 'LIKE', '%' . $name . '%')->paginate(5);

        }
        return view('front.admin.sb.SanBay', compact('SB'));
    }
}
