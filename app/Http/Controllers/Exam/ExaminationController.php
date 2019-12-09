<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Employee;
use App\Models\ExaminationTerm;
use App\Models\Section;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{

    public function examTermList(){
        return view('exam.exam_term_name_list');
    }
    public function createExamTermForm(){

        return view('exam.create_exam_term_name');
    }
    public function createExamTerm(Request $request){
        $data=$this->validate($request,[
            'exam_term_name'=>'required|unique:examination_term'
        ]);

        ExaminationTerm::create($data);
        $request->session()->flash('success','Create exam term name successfully');
        return redirect()->route('create.exam.term.form');
    }

    public function editExamTerm($id){
        $data['exam_term']=ExaminationTerm::find($id);
        return view('exam.edit_exam_term',$data);
    }

public function updateExamTerm($id,Request $request){
    $data=$this->validate($request,[
        'exam_term_name'=>'required|max:20'
    ]);
        ExaminationTerm::find($id)->update($data);
    $request->session()->flash('success','Update exam term name successfully');
    return redirect()->back();
}

    public function createExamRoutineForm(){
        $data['classes']=ClassName::get();
        $data['subjects']=Subject::get();
        $data['sections']=Section::get();
        $data['all_teacher']=Employee::get();
        $data['terms']=ExaminationTerm::get();

        return view('exam.create_exam_routine',$data);
    }





}
