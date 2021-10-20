<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends BaseController
{
    public function showRegister(){
        return view('front.loginAndRegister.register');
    }
    public function AddMember(Request $request)
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
                'SignUpConfirmPassword' => 'required|same:password'
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
              'password' => Hash::make($request->input('password')),
              'role' => '2',
          ]);
//        $user = User::create(array_merge([$request->except(['SignUpComfirmPassword']), ['role' => 2]], $request->input()));

        if ($user){
            Auth::login($user);
            return redirect('/login');
        }
    }
}
