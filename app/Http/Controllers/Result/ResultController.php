<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\ClassSubject;
use App\Models\ExaminationTerm;
use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
   public function insertStudentMarksForm(Request $request){
        $data['students']=Student::get();

        $data['terms']=ExaminationTerm::get();
        $student=$request->student;
        $data['std']=Student::where('id_number',$student)->first();

        if ($student!=''){

            $chect_class=Student::where('id_number',$student)->first();

            $data['subjects']=ClassSubject::where('class_name',$chect_class->class)->get();

        }

       return view('result.student_marks',$data);
   }

public function insertStudentMarks(Request $request){

    $this->validate($request,[
        'exam_term'=>'required',
    ]);

    foreach ($request->subjects as $key =>$subject){

        $marks=$request->marks[$key];
        if ($marks > 0 && $marks<=32){
            $grade='F';
            $grade_point=0.00;
        }elseif ($marks>=33 && $marks<=39){
            $grade='D';
            $grade_point=1.00;
        }elseif ($marks>=40 && $marks<=49){
            $grade='C';
            $grade_point=2.00;
        }elseif ($marks>=50 && $marks<=59){
            $grade='B';
            $grade_point=3.00;
        }elseif ($marks>=60 && $marks<=69){
            $grade='A-';
            $grade_point=3.50;
        }elseif ($marks>=70 && $marks<=79){
            $grade='A';
            $grade_point=4.00;
        }elseif ($marks>=80){
            $grade='A+';
            $grade_point=5.00;
        }


        Mark::create([
            'exam_term'=>$request->exam_term,
            'academic_year'=>$request->academic_year,
            'subject_name'=>$subject,
            'marks'=>$request->marks[$key],
            'grade'=>$grade,
            'grade_point'=>$grade_point,
            'student_id'=>$request->student_id,
        ]);
    }


    $request->session()->flash('success','Student marks successfully inserts');
    return redirect()->back();
}


public function resultShow(Request $request){


       $data['students']=Student::get();
       $student_id=$request->student_id;

       if ($student_id!=''){
           $data['marks']=Mark::where('student_id',$student_id)->get();
           $data['std']=Student::find($student_id);

       }

       return view('result.result_report',$data);
}



}
