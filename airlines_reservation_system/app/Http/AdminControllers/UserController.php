<?php

namespace App\Http\AdminControllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function AdminUser(){
        $User = User::all()->sortByDesc("id");;
        return view('front.admin.user.User',compact('User'));

    }

    public function viewadd(){
        return view('front.admin.user.addUser');
    }

    public function AddRecord(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'DOB' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'role'=>'required',

        ]);

        $data= new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->DOB = $request->DOB;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->password =Hash::make($request->password);
        $data->role =$request->role;


        $data->save();

        return Redirect::to('/adminUser');
    }

    public function DeleteRecord($id)
    {
        $del = User::findOrFail($id);
        $del->delete();
        return Redirect::to("/adminUser");
    }

    public function viewedit($id){
        $User = User::findOrFail($id);
        return view('front.admin.user.editUser',compact('User'));
    }


    public function UpdateRecord(Request $request,$id)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'DOB' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'gender' => 'required',
                'password' => 'required',
                'role'=>'required',

        ]);
        $data = User:: FindOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->DOB = $request->DOB;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->password =$request->password;
        $data->role =$request->role;

        $data->save();
        return Redirect::to('/adminUser');

    }
    public function search(Request $request){
        if ($request->isMethod('post'))
        {
            $name =$request->get('name');
            $User = User::where('name','LIKE','%'.$name.'%')
                        ->orwhere('email','LIKE','%'.$name.'%')
                        ->orwhere('phone','LIKE','%'.$name.'%')
                        ->orwhere('address','LIKE','%'.$name.'%')->paginate(5);


        }
        return view('front.admin.user.User',compact('User'));
    }
}
