<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showLogin(){
        return view('front.loginAndRegister.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required'
            ]
        );

        $canLoginAsAdmin = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => '1'
        ]);

        $canLoginAsUser = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'role' => '2'
        ]);

//        if ($canLoginAsUser){
//            return redirect('/member');
//        }
//        else{
//            return redirect()->back();
//        }

        if ($canLoginAsAdmin) {
            return redirect('/adminUser');
        }
        else if ($canLoginAsUser) {
            return redirect('/member');
        }
        else {
            return redirect()->back();
        }

    }
}
