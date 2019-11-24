<?php

namespace App\Http\Controllers\Attendance;

use App\Models\ClassName;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


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



        $all_student_name=$request->student_name;


        foreach($all_student_name as $student_name){
            $result=StudentAttendance::create([
                'status'=>$request->status_.$student_name,
                'student_name'=>$student_name,
                'teacher_name'=>auth()->guard('employee')->user()->id,
                'attend_date'=>Carbon::now(),
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
}
