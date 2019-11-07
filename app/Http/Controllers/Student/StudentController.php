<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Department;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentAdmissionForm(){

        return view('student.student_admission');
    }

    public function studentAdmission(Request $request){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'birth_certificate_number'=>'required',
            'blood_group'=>'required',
            'bus_facility'=>'nullable',
            'previous_institute_name'=>'required',
            'class_name'=>'required',
            'father_name'=>'required',
            'father_occupation'=>'required',
            'mother_name'=>'required',
            'mother_occupation'=>'nullable',
            'local_guardian_name'=>'nullable',
            'address'=>'required',
            'address2'=>'nullable',
            'contact_number'=>'required',
            'contact_number2'=>'nullable',
            'admission_date'=>'nullable',
            'admission_fees'=>'required',
            'email'=>'required|unique:students',
            'password'=>'required|min:6|max:20',
            'retype_password'=>'required|same:password|min:6|max:20',
        ]);

        $result=Student::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender_name'=>$request->gender_name,
            'date_of_birth'=>$request->date_of_birth,
            'birth_certificate_number'=>$request->birth_certificate_number,
            'blood_group'=>$request->blood_group,
            'bus_facility'=>$request->bus_facility,
            'previous_institute_name'=>$request->previous_institute_name,
            'class_name'=>$request->class_name,
            'father_name'=>$request->father_name,
            'father_occupation'=>$request->father_occupation,
            'mother_name'=>$request->mother_name,
            'mother_occupation'=>$request->mother_occupation,
            'local_guardian_name'=>$request->local_guardian_name,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'contact_number'=>$request->contact_number,
            'contact_number2'=>$request->contact_number2,
            'admission_date'=>$request->admission_date,
            'admission_fees'=>$request->admission_fees,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        if ($result){
            $request->session()->flash('success','Student admission successfully');
            return redirect()->route('student.admission.form');
        }else{
            $request->session()->flash('success','Student admission failed');
            return redirect()->route('student.admission.form');
        }
    }
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
}
