<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Notifications\StudentPasswordResetEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

    public function studentPasswordRecoveryForm(){

        return view('fontend.recover_password.student_recovery_password');
    }

    public function studentPasswordRecovery(Request $request){
        $this->validate($request,[
            'credential_name'=>'required'
        ]);
        $credential_name=$request->credential_name;

        $find_data=Student::where('email',$credential_name)->orWhere('contact_number',$credential_name)->orWhere('id_number',$credential_name)->first();

        if ($find_data!=null){
            return redirect()->route('student.password.recovery.system.form',$id=$find_data->id);

        }else{
            $request->session()->flash('error','Your credential is invalid');
            return redirect()->back();
        }

    }

    public function studentPasswordRecoverySystemForm(Request $request,$id){

        $data['student']=Student::find($id);
        return view('fontend.recover_password.student_recovery_password_system',$data);
    }

    public function studentPasswordRecoverySystem($id,Request $request){

        $mobile_email=$request->mobile_email;

        $check_email=Student::where('email',$mobile_email)->first();
        $check_mobile_number=Student::Where('contact_number',$mobile_email)->first();

        if ($check_email!=null){
            $time=md5(microtime());
            $token=Str::random(40).$time;

            $student_obj=Student::where('id',$check_email->id)->update([
                'password_token'=>$token,
            ]);
            $check_email->notify(new StudentPasswordResetEmail($token,$student_obj));
            $request->session()->flash('success','Reset mail send successfully');
            return redirect()->back();
        }elseif ($check_mobile_number!=null){
            $time=md5(microtime());
            $token=Str::random(40).$time;

            Student::where('id',$check_mobile_number->id)->update([
                'password_token'=>$token,
            ]);
        }



    }

    public function studentPasswordResetForm($token){
        $data['token']=$token;


            return view('fontend.recover_password.student_new_password',$data);

    }

    public function studentPasswordReset($token,Request $request){
        $this->validate($request,[
            'new_password'=>'required',
            'confirm_password'=>'required|same:new_password',
        ]);

        $check_token=Student::where('password_token',$token)->first();
        if ($check_token!=null){
            Student::where('id',$check_token->id)->update([
                'password'=>bcrypt($request->new_password),
                'password_token'=>'',
            ]);
            $request->session()->flash('success','Your password reset successfully changed, now you can login');

            return redirect()->route('student.login.form');
        }else{
            $request->session()->flash('error','Invalid token, please try again');
            return redirect()->back();
        }
    }
}
