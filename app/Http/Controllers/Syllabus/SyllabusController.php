<?php

namespace App\Http\Controllers\Syllabus;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\ExaminationTerm;
use App\Models\Subject;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class SyllabusController extends Controller
{
    public function createSyllabusForm(){
        $data['classes']=ClassName::get();
        $data['subjects']=Subject::get();
        $data['terms']=ExaminationTerm::get();
        return view('syllabus.create_syllabus',$data);
    }

    public function createSyllabus(Request $request){
        $data=$this->validate($request,[
            'class'=>'required',
            'subject'=>'required',
            'exam_term_name'=>'required',
            'academic_year'=>'required',
            'description'=>'required',
        ]);

        $result=Syllabus::create([
           'class_id'=>$request->class,
           'subject_id'=>$request->subject,
            'examination_term_id'=>$request->exam_term_name,
            'academic_year'=>$request->academic_year,
            'description'=>$request->description,
            ]);
        if ($result){
            $request->session()->flash('success','Syllabus created successfully');
            return redirect()->route('create.syllabus.form');
        }else{
            $request->session()->flash('error','Syllabus create failed');
            return redirect()->route('create.syllabus.form');
        }
    }
}
