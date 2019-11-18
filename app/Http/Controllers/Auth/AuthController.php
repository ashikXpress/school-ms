<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {

//        $this->middleware('guest')->except('logoutProcess');
    }

    public function loginForm(){

    if (Auth::guard('employee')->check()){

        return redirect()->route('dashboard');
    }

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
