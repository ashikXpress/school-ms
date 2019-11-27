<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {

//        $this->middleware('guest')->except('logoutProcess');
    }

    public function loginForm(){
        if (Auth::guard('employee')->check()){
            if (Auth::guard('employee')->user()->user_type=='superadmin'){
                return redirect()->route('dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='admin'){
                return redirect()->route('dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='teacher'){
                return redirect()->route('teacher.dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='staff'){
                return redirect()->route('staff.dashboard');
            }
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
            if (Auth::guard('employee')->user()->user_type=='superadmin'){
                return redirect()->route('dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='admin'){
                return redirect()->route('dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='teacher'){
                return redirect()->route('teacher.dashboard');
            }elseif (Auth::guard('employee')->user()->user_type=='staff'){
                return redirect()->route('staff.dashboard');
            }


        }else{
            $request->session()->flash('error','Invalid Email/Password');
            return redirect()->route('login.form');
        }
    }

    public function logoutProcess(){
            Session::flush ();
            Auth::guard('employee')->logout();
            return redirect()->route('login.form');

    }
}
