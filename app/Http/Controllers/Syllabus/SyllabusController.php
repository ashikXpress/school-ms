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
    public function createSyllabusForm(Request $request){

        $data['terms']=ExaminationTerm::get();

        $data['classes']=ClassName::get();
        $data['subjects']=Subject::get();

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

        $dataCheck=Syllabus::where('class_id',$request->class)
            ->where('subject_id',$request->subject)
            ->where('examination_term_id',$request->exam_term_name)
            ->where('academic_year',$request->academic_year)->first();
        if ($dataCheck==null){
            Syllabus::create([
                'class_id'=>$request->class,
                'subject_id'=>$request->subject,
                'examination_term_id'=>$request->exam_term_name,
                'academic_year'=>$request->academic_year,
                'description'=>$request->description,
            ]);

            $request->session()->flash('success','Syllabus created successfully');
            return redirect()->route('create.syllabus.form');
        }else{
            $request->session()->flash('error','This data already exists, check your syllabus list');
            return redirect()->route('create.syllabus.form');
        }
    }

    public function syllabusList(Request $request){
        $data['terms']=ExaminationTerm::get();
        $data['classes']=ClassName::get();
        $data['subjects']=Subject::get();

        $class_id=$request->class;
        $subject_id=$request->subject;
        $examination_term_id=$request->exam_term_name;
        $academic_year=$request->academic_year;
        if ($class_id!='' && $subject_id!='' && $examination_term_id!='' && $academic_year!=''){

            $data['syllabus_lists']=Syllabus::where('class_id',$class_id)->where('subject_id',$subject_id)->where('examination_term_id',$examination_term_id)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class_id!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class_id',$class_id)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class_id!='' && $subject_id!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class_id',$class_id)->where('subject_id',$subject_id)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class_id!='' && $subject_id!='' && $examination_term_id!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class_id',$class_id)->where('subject_id',$subject_id)->where('examination_term_id',$examination_term_id)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($subject_id!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('subject_id',$subject_id)->where('academic_year',$academic_year)->paginate(20);

        }
        elseif ($examination_term_id!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('examination_term_id',$examination_term_id)->where('academic_year',$academic_year)->paginate(20);

        }
        elseif ($academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('academic_year',$academic_year)->paginate(20);

        }
        else{
            $data['syllabus_lists']=Syllabus::paginate(15);

        }
        $data['counts']=Syllabus::count();

        return view('syllabus.show_syllabus',$data);
    }
    public function detailsSyllabus($id){
        $data['syllabus']=Syllabus::find($id);
        return view('syllabus.detalies_syllabus',$data);
    }
}
