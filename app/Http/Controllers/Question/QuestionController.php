<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Models\CreativeQuestion;
use App\Models\ObjectiveQuestion;
use App\Models\ObjectiveQuestionOption;
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

    public function createObjectiveQuestionForm(Request $request){
        $qty=$request->quantity;
        $data=[];
        if ($qty!=''){
            $data['questions']=$qty;
        }

        return view('question.create_objective_questions',$data);
    }
public function createObjectiveQuestion(Request $request){
        $question_qty=$request->question_qty;

    $validate_array = [
        'class'=>'required',
        'subject'=>'required',
        'exam_term'=>'required',
        'academic_year'=>'required',

    ];
    for($i=1; $i<=$question_qty; $i++) {
        $validate_array['objective_question_name_'.$i] = 'required';
        $validate_array['option_a_'.$i] = 'required';
        $validate_array['option_b_'.$i] = 'required';
        $validate_array['option_c_'.$i] = 'required';
        $validate_array['option_d_'.$i] = 'required';
    }


    $this->validate($request,$validate_array);




    for ($i=1; $i<=$question_qty; $i++){
        $question_name=$request->objective_question_name_1++;
        $result=ObjectiveQuestion::create([
            'objective_question_name'=>$question_name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'exam_term'=>$request->exam_term,
            'academic_year'=>$request->academic_year,
        ]);
        $a=$request->option_a_1++;
        $b=$request->option_b_1++;
        $c=$request->option_c_1++;
        $d=$request->option_d_1++;
        ObjectiveQuestionOption::create([
            'objective_question_id'=>$result->id,
            'option_a'=>$a,
            'option_b'=>$b,
            'option_c'=>$c,
            'option_d'=>$d,
        ]);


    }

    $request->session()->flash('success','Objective question created successfully');
    return redirect()->back();

}

public function objectiveQuestionList(Request $request){
        $data=[];
        $class=$request->class;
        $subject=$request->subject;
        $exam_term=$request->exam_term;
        $academic_year=$request->academic_year;
        if ($class!='' && $subject!='' && $exam_term!='' && $academic_year!=''){
            $data['questions']=ObjectiveQuestion::where('class',$class)
                ->where('subject',$subject)
                ->where('exam_term',$exam_term)
                ->where('academic_year',$academic_year)
                ->get();
        }


  return view('question.objective_question_list',$data);
}

}
