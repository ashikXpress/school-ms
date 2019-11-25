<?php

namespace App\Http\Controllers\Attendance;

use App\Models\ClassName;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use phpDocumentor\Reflection\Types\Integer;


class StudentAttendanceController extends Controller
{
    public function studentAttendanceForm(Request $request){



        $data['classes']=ClassName::get();
        $data['sections']=Section::get();
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;


        if ($class!='' && $shift=='' && $section==''){

            $data['student_search_lists']=Student::Where('class',$class)->get();


        }elseif ($class!='' && $shift!='' && $section=='')
        {
            $data['student_search_lists']=Student::Where('class',$class)->where('shift',$shift)->get();

        }elseif ($class!='' && $shift!='' && $section!=''){
            $data['student_search_lists']=Student::Where('class',$class)->where('shift',$shift)->where('section',$section)->get();

        }elseif ($class=='' && $shift!='' && $section==''){
            $data['student_search_lists']=Student::where('shift',$shift)->get();

        }elseif ($class=='' && $shift=='' && $section!=''){
            $data['student_search_lists']=Student::where('section',$section)->get();

        }elseif ($class!='' && $shift=='' && $section!=''){
            $data['student_search_lists']=Student::where('class',$class)->where('section',$section)->get();

        }elseif ($class=='' && $shift!='' && $section!=''){
            $data['student_search_lists']=Student::where('shift',$shift)->where('section',$section)->get();

        }


        return view('attendance.student_attendance',$data);
    }


    public function studentAttendance(Request $request){

        $all_student=$request->student_id;

        foreach($all_student as $key =>$student_id){

                    $result=StudentAttendance::create([
                        'status'=>$request->status[$key],
                        'student_id'=>$student_id,
                        'teacher_id'=>auth()->guard('employee')->user()->id,
                        'attend_date'=>Carbon::now()->format('d-m-Y'),
//                        H:i:s
                    ]);
        }




        if ($result){
            $request->session()->flash('success','Student attendance successful');
            return redirect()->route('student.attendance.form');
        }else{
            $request->session()->flash('success','Student attendance failed');
            return redirect()->route('student.attendance.form');
        }
    }

    public function studentAttendanceInfo(Request $request){
        $data['classes']=ClassName::get();
        $data['sections']=Section::get();

        $from=$request->from_date;
        $to=$request->to_date;
        $class=$request->class;


       if ($from!='' && $to!=''){
           $data['students_attendance_info']=StudentAttendance::where('attend_date', '>=',$from)
               ->where('attend_date','<=',$to)->get();

       }else{
           $data['students_attendance_info']=StudentAttendance::orderBy('attend_date','desc')->get();

       }

        return view('attendance.student_attendance_info',$data);
    }
}
