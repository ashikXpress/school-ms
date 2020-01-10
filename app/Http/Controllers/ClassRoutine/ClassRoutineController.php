<?php

namespace App\Http\Controllers\ClassRoutine;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Employee;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ClassRoutineController extends Controller
{
    public function createClassRoutineForm(){

        $data['class_names']=ClassName::get();
        $data['all_subjects']=Subject::get();
        $data['all_teacher']=User::get();
        $data['all_section']=Section::get();
        return view('academic.create_class_routine',$data);
    }
    public function createClassRoutine(Request $request){
        $data=$this->validate($request,[
            'day'=>'required',
            'class'=>'required',
            'period'=>'required',
            'subject'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'room_number'=>'required',
            'teacher_name'=>'required',
            'group'=>'nullable',
            'shift'=>'nullable',
            'section'=>'nullable',
            'academic_year'=>'required',
        ]);

        $result=Routine::create($data);
        if ($result){
            $request->session()->flash('success','Class'.''.$request->class.'1st create'.'successfully');
            return redirect()->route('create.class.routine.form');
        }else{
            $request->session()->flash('error','Class routine create failed');
            return redirect()->route('create.class.routine.form');
        }

    }

    public function showClassRoutine(Request $request){

        $data['sections']=Section::get();
        $data['classes']=ClassName::get();

        $day=$request->day;
        $class=$request->class;

        if ($day!='' && $class==''){

            $data['all_class_routine']=Routine::Where('day',$day)->get();
        } elseif($day=='' && $class!=''){

            $data['all_class_routine']=Routine::Where('class',$class)->get();
        }elseif($day!='' && $class!=''){
            $data['all_class_routine']=Routine::where('day',$day)->Where('class',$class)->get();
        }

        return view('academic.show_class_routine',$data);
    }

}
