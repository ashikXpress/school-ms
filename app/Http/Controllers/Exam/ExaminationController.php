<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\ExaminationTerm;
use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    public function createExamTermForm(){
            $data['exam_terms']=ExaminationTerm::paginate(10);
            $data['counts']=ExaminationTerm::count();
        return view('exam.exam_term_name',$data);
    }
    public function createExamTerm(Request $request){
        $data=$this->validate($request,[
            'exam_term_name'=>'required|unique:examination_term'
        ]);

        ExaminationTerm::create($data);
        $request->session()->flash('success','Create exam term name successfully');
        return redirect()->route('create.exam.term.form');
    }
}
