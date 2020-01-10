<?php

namespace App\Http\Controllers\Password;

use App\Http\Controllers\Controller;
use App\Mail\EmployeePasswordReset;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function employeeRecoveryPasswordForm(){
        return view('admin.auth.password_recovery');
    }

    public function employeeRecoveryPassword(Request $request){
        $this->validate($request,[
            'email'=>'required|min:5|max:50'
        ]);
        $email=$request->email;
        $result=User::where('email',$email)->first();


        if ($result!=null){

            $time=md5(microtime());
            $token=Str::random(40).$time;

            User::where('email',$email)->update([
                'password_token'=>$token
            ]);


            Mail::to($result->email)->send(new EmployeePasswordReset($token));
            $request->session()->flash('success','please check your mail...');

            return redirect()->back();
        }else{

            $request->session()->flash('error','invalid email');
            return redirect()->back();
        }

    }

    public function employeeResetPasswordForm($token,Request $request){

        $data['token']=$token;
        return view('admin.auth.employee_password_reset',$data);
    }

    public function employeeResetPassword($token,Request $request){
        $this->validate($request,[
            'new_password'=>'required',
            'confirm_password'=>'required|same:new_password',
        ]);
        $result=User::where('password_token',$token)->first();


        if ($result !=null){
            User::where('password_token',$token)->update([
                'password'=>bcrypt($request->new_password),
                'password_token'=>''
            ]);
            $request->session()->flash('success','Your password reset successfully');

            return redirect()->back();
        }else{
            $request->session()->flash('error','Your reset link is wrong');

            return redirect()->back();

        }
    }
}
