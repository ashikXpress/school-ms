<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Student;
use App\Models\StudentAttendance;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
      Session::flush ();
      Auth::guard('student')->logout();
      return redirect()->route('student.login.form');


  }

  public function studentIdCard(){

        $student_id=Auth::guard('student')->user()->id;
        $data['idcard']=Student::where('id',$student_id)->first();
        return view('student_panel.student_idcard_generate',$data);
  }

  public function studentSyllabus(){

      $student_class=Auth::guard('student')->user()->class;

      $class_id=ClassName::where('class_name',$student_class)->first();

      $data['syllabus_lists']=Syllabus::where('class_id',$class_id->id)->paginate(10);
      $data['counts']=Syllabus::where('class_id',$class_id->id)->count();
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
}
