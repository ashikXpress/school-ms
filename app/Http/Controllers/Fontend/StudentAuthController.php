<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAuthController extends Controller
{
    public function studentLoginForm(){
        if (Auth::guard('student')->check()){
            return redirect()->route('student.dashboard');
        }else{
            return view('fontend.student_login');
        }

    }

    public function studentLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('email','password');
        if(Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('student.dashboard');
        }else{
            return redirect()->route('student.login.form');
        }


    }
}
