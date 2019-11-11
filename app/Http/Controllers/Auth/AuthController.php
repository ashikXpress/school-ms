<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){

        return view('admin.auth.login');
    }
    public function loginProcess(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('email','password');
        if (Auth::guard('employee')->attempt($credentials)){

            return redirect()->route('dashboard');
        }else{
            $request->session()->flash('error','Invalid Email/Password');
            return redirect()->route('login.form');
        }
    }

    public function logoutProcess(){

            Auth::guard('employee')->logout();
            return redirect()->route('login.form');

    }
}
