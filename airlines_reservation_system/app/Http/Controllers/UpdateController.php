<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateController
{
    public function showUpdate(){
        return view('front.loginAndRegister.update');
    }
    public function update(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => ['required', Rule::unique('users', 'email')->ignore(Auth::user()->id)],
                'phone' => 'required',
                'address' => 'required',
            ]
        );

        Auth::user()->update($request->only(['name', 'email', 'phone', 'address']));
        return redirect('/update');
    }
}
