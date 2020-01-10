<?php

namespace App\Http\Controllers\Attendance;

use App\Models\ClassName;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;


class StudentAttendanceController extends Controller
{
    public function studentAttendanceForm(Request $request){
        $data=[];
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;

        $data_check=Carbon::now()->format('d-m-Y');
        $check_class_attendance=StudentAttendance::where('attend_date',$data_check)->where('class',$class)->first();
        $check_class_section_attendance=StudentAttendance::where('attend_date',$data_check)->where('class',$class)->where('section',$section)->first();
        $check_class_shift_attendance=StudentAttendance::where('attend_date',$data_check)->where('class',$class)->where('shift',$shift)->first();
        $check_class_section_shift_attendance=StudentAttendance::where('attend_date',$data_check)->where('class',$class)->where('section',$section)->where('shift',$shift)->first();


        if ($class!='' && $shift=='' && $section==''){
            if ($check_class_attendance==null){
                $data['student_search_lists']=Student::Where('class',$class)->get();
            }else{
                $data['attendance_check']='Sorry, Already today class '.$class.' attendance is taken. if you change any data then check student attendance report';

            }


        }elseif ($class!='' && $section!='' && $shift=='')
        {
            if ($check_class_section_attendance==null){
                $data['student_search_lists']=Student::Where('class',$class)->where('section',$section)->get();
            }else{
                $data['attendance_check']='Sorry, Already today class '.$class.' '.$section.' section attendance is taken. if you change any data then check student attendance report';

            }

        }elseif ($class!='' && $shift!='' && $section==''){
            if ($check_class_shift_attendance==null){
                $data['student_search_lists']=Student::Where('class',$class)->where('shift',$shift)->get();
            }else{
                $data['attendance_check']='Sorry, Already today class '.$class.' '.$shift.' shift attendance is taken. if you change any data then check student attendance report';

            }

        }elseif ($class!='' && $shift!='' && $section!='') {
            if ($check_class_section_shift_attendance==null){
                $data['student_search_lists'] = Student::Where('class', $class)->where('section', $section)->where('shift', $shift)->get();
            }else{
                $data['attendance_check']='Sorry, Already today class '.$class.' '.$section.' section '.$shift.' shift  attendance is taken. if you change any data then check student attendance report';

            }

        }

        return view('attendance.student_attendance',$data);
    }


    public function studentAttendance(Request $request){

        $all_student=$request->student_id;

        foreach($all_student as $key =>$student_id){

                    $chect_student=Student::where('id',$student_id)->first();

                    $result=StudentAttendance::create([
                        'status'=>$request->status[$key],
                        'student_id'=>$student_id,
                        'class'=>$chect_student->class,
                        'section'=>$chect_student->section,
                        'shift'=>$chect_student->shift,
                        'teacher_id'=>Auth::id(),
                        'attend_date'=>Carbon::now()->format('d-m-Y'),

                    ]);
        }


            $request->session()->flash('success','Student attendance successful');
            return redirect()->route('student.attendance.form');
    }

    public function studentAttendanceInfo(Request $request){

        $data=[];
        $from=$request->from_date;
        $to=$request->to_date;
        $class=$request->class;
        $section=$request->section;
        $shift=$request->shift;


       if ($from!='' && $to!='' && $class!=''){
           $data['students_attendance_info']=StudentAttendance::where('class',$class)->where('attend_date', '>=',$from)
               ->where('attend_date','<=',$to)->get();

       }elseif ($from!='' && $to!='' && $class!='' && $section!=''){
            $data['students_attendance_info']=StudentAttendance::where('class',$class)->where('section',$section)->where('attend_date', '>=',$from)
                ->where('attend_date','<=',$to)->get();

        }elseif ($from!='' && $to!='' && $class!='' && $section!='' && $shift!=''){
           $data['students_attendance_info']=StudentAttendance::where('class',$class)->where('section',$section)->where('shift',$shift)->where('attend_date', '>=',$from)
               ->where('attend_date','<=',$to)->get();

       }


        return view('attendance.student_attendance_info',$data);
    }

    public function studentAttendanceChange($id,Request $request){

        $attendance=StudentAttendance::find($id);

        if ($attendance->status==1){
            StudentAttendance::where('student_id',$attendance->student_id)->update([
                'status'=>0
            ]);
            $request->session()->flash('success','Present Successfully Changed');
        }else{
            StudentAttendance::where('student_id',$attendance->student_id)->update([
                'status'=>1
            ]);
            $request->session()->flash('success','Absent Successfully Changed');
        }


        return redirect()->back();

    }
}
