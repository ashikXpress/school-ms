<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Student;
use App\Models\StudentAttendance;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('student');
    }

    public function studentDashboard(){

      return view('student_panel.student_dashboard');
  }

  public function studentLogout(){

      Auth::guard('student')->logout();
      return redirect()->route('student.login.form');


  }

  public function studentIdCard(){

        $student_id=Auth::guard('student')->user()->id;
        $data['idcard']=Student::where('id',$student_id)->first();
        return view('student_panel.student_idcard_generate',$data);
  }

  public function studentSyllabus(){

      $std_class=Auth::guard('student')->user()->class;

      $data['syllabus_lists']=Syllabus::where('class',$std_class)->paginate(10);

      $data['counts']=Syllabus::where('class',$std_class)->count();

        return view('student_panel.student_syllabus',$data);
  }

  public function studentAttendanceReport(Request $request){
      $from=$request->from_date;
      $to=$request->to_date;
      $data=[];
      $student_class=Auth::guard('student')->user()->class;
      $student_id=Auth::guard('student')->user()->id;

      if ($from!='' && $to!=''){
          $data['students_attendance_info']=StudentAttendance::where('class',$student_class)->where('student_id',$student_id)->where('attend_date', '>=',$from)
              ->where('attend_date','<=',$to)->get();
      }

      return view('student_panel.student_attendance_report',$data);
  }


    public function changePasswordFrom(){
        return view('student_panel.student_change_password');
    }
    public function changePassword(Request $request){
        $this->validate($request,[
            'old_password'=>'required|min:6|max:20',
            'new_password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:new_password|min:6|max:20',
        ]);

        $auth_login_id=Auth::guard('student')->user()->id;

        $studentObj=Student::find($auth_login_id);

        $hashedPassword=$studentObj->password;
        $oldPassword=$request->old_password;

        if(Hash::check($oldPassword, $hashedPassword))
        {
            Student::find($auth_login_id)->update([
                'password'=>bcrypt($request->new_password),
            ]);
            $request->session()->flash('success','Password change successfully');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Your old password is incorrect !!');
            return redirect()->back();
        }
    }

public function studentProfile(){

        $id=Auth::guard('student')->user()->id;

        $data['student']=Student::find($id);

        return view('student_panel.student_profile',$data);

}

}
