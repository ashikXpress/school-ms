<?php

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Subject;
use Illuminate\Http\Request;

class AcademicController extends Controller
{


    public function createSubjectForm(){
        $data['subject_lists']=Subject::orderBy('id','desc')->paginate(4);
        return view('student.create_subject',$data);
    }
    public function createSubject(Request $request){
        $this->validate($request,[
            'subject_name'=>'required|unique:subjects|min:1|max:50',
            'book'=>'nullable|min:1|max:50',
            'writer'=>'nullable|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        $result=Subject::create([
            'subject_name'=>$request->subject_name,
            'book'=>$request->book,
            'writer'=>$request->writer,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Subject created successfully');
            return redirect()->route('create.subject.form');
        }else{
            $request->session()->flash('success','Subject create failed');
            return redirect()->route('create.subject.form');
        }
    }
    public function createShiftForm(){
        $data['shift_lists']=Shift::orderBy('id','desc')->paginate(4);
        return view('student.create_shift',$data);
    }
    public function createShift(Request $request){
        $this->validate($request,[
            'shift_name'=>'required|unique:shifts|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        $result=Shift::create([
            'shift_name'=>$request->shift_name,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Shift created successfully');
            return redirect()->route('create.shift.form');
        }else{
            $request->session()->flash('success','Shift create failed');
            return redirect()->route('create.shift.form');
        }
    }
    public function createSectionForm(){
        $data['section_lists']=Section::orderBy('id','desc')->paginate(4);
        return view('student.create_section',$data);
    }
    public function createSection(Request $request){
        $this->validate($request,[
            'section_name'=>'required|unique:sections|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        $result=Section::create([
            'section_name'=>$request->section_name,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Section created successfully');
            return redirect()->route('create.section.form');
        }else{
            $request->session()->flash('success','Section create failed');
            return redirect()->route('create.section.form.form');
        }
    }
    public function createClassForm(){
        $data['class_lists']=ClassName::orderBy('id','desc')->paginate(4);
        return view('student.create_class',$data);
    }
    public function createClass(Request $request){
        $this->validate($request,[
            'class_name'=>'required|unique:classes|min:3|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);


        $result=ClassName::create([
            'class_name'=>$request->class_name,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Class created successfully');
            return redirect()->route('create.class.form');
        }else{
            $request->session()->flash('success','Class create failed');
            return redirect()->route('create.class.form');
        }

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
    public function createDepartmentForm(){
        $data['department_lists']=Department::orderBy('id','desc')->paginate(4);
        return view('student.create_department',$data);
    }
    public function createDepartment(Request $request){

        $this->validate($request,[
            'dept_name'=>'required|unique:departments|min:3|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        $result=Department::create([
            'dept_name'=>$request->dept_name,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Department created successfully');
            return redirect()->route('create.department.form');
        }else{
            $request->session()->flash('Department','Department create failed');
            return redirect()->route('create.department.form');
        }
    }

    public function createDesignationForm(){
        $data['designation_lists']=Designation::orderBy('id','desc')->paginate(4);
        return view('employee.create_designation',$data);
    }
    public function createDesignation(Request $request){
        $this->validate($request,[
            'designation_name'=>'required|unique:designations|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        $result=Designation::create([
            'designation_name'=>$request->designation_name,
            'description'=>$request->description,
        ]);
        if ($result){
            $request->session()->flash('success','Designations created successfully');
            return redirect()->route('create.designation.form');
        }else{
            $request->session()->flash('success','Designations create failed');
            return redirect()->route('create.designation.form');
        }
    }


}
