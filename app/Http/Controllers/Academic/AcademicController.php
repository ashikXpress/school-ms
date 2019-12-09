<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\ClassSubject;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AcademicController extends Controller
{
    public function __construct()
    {

    }

    public function subjectList(){

        return view('academic.subject_list');
    }
    public function createSubjectForm(){
        $data['subject_lists']=Subject::orderBy('id','desc')->paginate(4);
        return view('academic.create_subject',$data);
    }
    public function createSubject(Request $request){
        $this->validate($request,[
            'subject_name'=>'required|unique:subjects|min:1|max:50',
            'subject_code'=>'required|unique:subjects|min:1|max:10',
        ]);
        Subject::create([
            'subject_name'=>$request->subject_name,
            'subject_code'=>$request->subject_code,
        ]);
            $request->session()->flash('success','Subject Created Successfully');
            return redirect()->route('create.subject.form');

    }
public function editSubject($id){
        $data['subject']=Subject::find($id);
        return view('academic.edit_subject',$data);
}

public function updateSubject($id,Request $request){
    $this->validate($request,[
        'subject_name'=>'required|min:1|max:50',
        'subject_code'=>'required|min:1|max:10',
    ]);

    Subject::find($id)->update([
        'subject_name'=>$request->subject_name,
        'subject_code'=>$request->subject_code,
    ]);
    $request->session()->flash('success','Subject Update Successfully');
    return redirect()->back();
}

public function sectionList(){

        return view('academic.section_list');
}
    public function createSectionForm(){
        $data['section_lists']=Section::orderBy('id','desc')->paginate(4);
        return view('academic.create_section',$data);
    }
    public function createSection(Request $request){
        $this->validate($request,[
            'section_name'=>'required|unique:sections|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
       Section::create([
            'section_name'=>ucfirst(strtolower($request->section_name)),
            'description'=>$request->description,
        ]);

            $request->session()->flash('success','Section created successfully');
            return redirect()->route('create.section.form');

    }

    public function editSection($id){
        $data['section']=Section::find($id);
        return view('academic.edit_section',$data);
    }
public function updateSection($id,Request $request){
    $this->validate($request,[
        'section_name'=>'required|min:1|max:50',
        'description'=>'nullable|min:5|max:300',
    ]);
        Section::find($id)->update([
            'section_name'=>ucfirst(strtolower($request->section_name)),
            'description'=>$request->description,
        ]);

    $request->session()->flash('success','Section Update successfully');
    return redirect()->back();
}

    public function classList(){

        return view('academic.class_list');
    }

    public function createClassForm(){
        $data['class_lists']=ClassName::orderBy('id','desc')->paginate(4);
        return view('academic.create_class',$data);
    }
    public function createClass(Request $request){
        $this->validate($request,[
            'class_name'=>'required|unique:classes|min:3|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);


        $result=ClassName::create([
            'class_name'=>ucfirst(strtolower($request->class_name)),
            'description'=>$request->description,
        ]);

            $request->session()->flash('success','Class Created Successfully');
            return redirect()->route('create.class.form');

    }

    public function editClass($id){
        $data['class']=ClassName::find($id);
        return view('academic.edit_class',$data);
    }
public function updateClass($id,Request $request){
    $this->validate($request,[
        'class_name'=>'required|min:3|max:50',
        'description'=>'nullable|min:5|max:300',
    ]);
    ClassName::find($id)->update([
        'class_name'=>ucfirst(strtolower($request->class_name)),
        'description'=>$request->description,
    ]);

    $request->session()->flash('success','Class Update Successfully');
    return redirect()->back();
}
    public function deleteClass($id,Request $request){

        $result=ClassName::find($id)->delete();

        if ($result){
            $request->session()->flash('success','Class Deleted successfully');
            return redirect()->route('create.class.form');
        }else{
            $request->session()->flash('error','Class delete failed');return redirect()->route('create.class.form');
        }

    }


public function createClassSubjectForm(){

        $data['classes']=ClassName::get();
        $data['subjects']=Subject::get();
        return view('academic.create_class_subject',$data);
}

public function createClassSubject(Request $request){
        $this->validate($request,[
            'class'=>'required',
            'academic_year'=>'required',
        ]);


        $subjects=$request->subjects;

        $check=ClassSubject::where('class_name',$request->class)->where('academic_year',$request->academic_year)->first();
        if ($check==null){
            foreach ($subjects as $key=>$subject){
                ClassSubject::create([
                    'class_name'=>$request->class,
                    'subject_name'=>$subject,
                    'subject_code'=>$request->subject_code[$key],
                    'academic_year'=>$request->academic_year,

                ]);
            }
            $request->session()->flash('success','Class subject created successfully');
            return redirect()->back();
        }else{
            $request->session()->flash('error','Class '. $request->class. ' subject this year already created');
            return redirect()->back();
        }


}


}
