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

        return view('syllabus.create_syllabus');
    }

    public function createSyllabus(Request $request){
        $data=$this->validate($request,[
            'class'=>'required',
            'subject'=>'required',
            'exam_term_name'=>'required',
            'academic_year'=>'required',
            'description'=>'required',
        ]);

        $dataCheck=Syllabus::where('class',$request->class)
            ->where('subject',$request->subject)
            ->where('examination_term',$request->exam_term_name)
            ->where('academic_year',$request->academic_year)->first();
        if ($dataCheck==null){
            Syllabus::create([
                'class'=>$request->class,
                'subject'=>$request->subject,
                'examination_term'=>$request->exam_term_name,
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

    public function editSyllabus($id){
        $data['syllabus']=Syllabus::find($id);
        return view('syllabus.edit_syllabus',$data);
    }


    public function updateSyllabus($id,Request $request){
        $this->validate($request,[
            'class'=>'required',
            'subject'=>'required',
            'exam_term_name'=>'required',
            'academic_year'=>'required',
            'description'=>'required',
        ]);

        Syllabus::find($id)->update([
            'class'=>$request->class,
            'subject'=>$request->subject,
            'examination_term'=>$request->exam_term_name,
            'academic_year'=>$request->academic_year,
            'description'=>$request->description,
        ]);
        $request->session()->flash('success','Syllabus Update Successfully');
        return redirect()->back();
    }

    public function syllabusList(Request $request){

        $class=$request->class;
        $subject=$request->subject;
        $examination_term=$request->exam_term_name;
        $academic_year=$request->academic_year;
        if ($class!='' && $subject!='' && $examination_term!='' && $academic_year!=''){

            $data['syllabus_lists']=Syllabus::where('class',$class)->where('subject',$subject)->where('examination_term',$examination_term)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class',$class)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class!='' && $subject!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class',$class)->where('subject',$subject)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($class!='' && $subject!='' && $examination_term!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('class',$class)->where('subject',$subject)->where('examination_term',$examination_term)->where('academic_year',$academic_year)->paginate(30);

        }elseif ($subject!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('subject',$subject)->where('academic_year',$academic_year)->paginate(20);

        }
        elseif ($examination_term!='' && $academic_year!=''){
            $data['syllabus_lists']=Syllabus::where('examination_term',$examination_term)->where('academic_year',$academic_year)->paginate(20);

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

        return view('syllabus.syllabus_details',$data);
    }
}
