<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\CreativeQuestion;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function createCreativeQuestionForm(){

        return view('question.create_creative_question');
    }
    public function createCreativeQuestion(Request $request){
        $data=$this->validate($request,[
            'class'=>'required',
            'subject'=>'required',
            'exam_term'=>'required',
            'academic_year'=>'required',
            'creative_question'=>'required',
        ]);

        CreativeQuestion::create($data);
        $request->session()->flash('success','Create Question Create Successful');
        return redirect()->back();

    }

    public function creativeQuestionList(){
        $data['questions']=CreativeQuestion::paginate(1);
        $data['counts']=CreativeQuestion::count();
        return view('question.creative_question_list',$data);
    }

    public function creativeQuestionDetails($id){
        $data['question']=CreativeQuestion::find($id);
        return view('question.creative_question_details',$data);
    }
}
