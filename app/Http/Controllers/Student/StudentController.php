<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Student;
use App\Models\StudentAttendance;
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
            'blood_group'=>'nullable',
            'present_address'=>'required',
            'permanent_address'=>'nullable',
            'contact_number'=>'required|unique:students',
            'contact_number2'=>'nullable',



            'class'=>'required',
            'roll'=>'required',
            'section'=>'nullable',
            'shift'=>'nullable',
            'group'=>'nullable',
            'admission_date'=>'required',
            'admission_fees'=>'required',
            'birth_certificate_number'=>'required',
            'transport'=>'nullable',
            'previous_institute_name'=>'nullable',


            'father_name'=>'required',
            'father_contact_number'=>'required|unique:students',
            'father_occupation'=>'required',
            'mother_name'=>'required',
            'mother_contact_number'=>'nullable|unique:students',
            'mother_occupation'=>'nullable',
            'local_guardian_name'=>'nullable',


            'email'=>'required|unique:students',
            'photo'=>'required',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password|min:6|max:20',
        ]);

        $photo_path= $request->photo->store('gallery');

        $result=Student::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender_name'=>$request->gender_name,
            'date_of_birth'=>$request->date_of_birth,
            'blood_group'=>$request->blood_group,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'contact_number'=>$request->contact_number,
            'contact_number2'=>$request->contact_number2,


            'class'=>$request->class,
            'roll'=>$request->roll,
            'section'=>$request->roll,
            'shift'=>$request->shift,
            'group'=>$request->group,
            'birth_certificate_number'=>$request->birth_certificate_number,
            'admission_date'=>$request->admission_date,
            'admission_fees'=>$request->admission_fees,
            'previous_institute_name'=>$request->previous_institute_name,
            'transport'=>$request->transport,


            'father_name'=>$request->father_name,
            'father_contact_number'=>$request->father_contact_number,
            'father_occupation'=>$request->father_occupation,
            'mother_name'=>$request->mother_name,
            'mother_contact_number'=>$request->mother_contact_number,
            'mother_occupation'=>$request->mother_occupation,
            'local_guardian_name'=>$request->local_guardian_name,


            'photo'=>$photo_path,
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

    public function studentList(){

        $data['student_lists']=Student::orderBy('id','desc')->paginate(4);
        return view('student.student_lists',$data);
    }

    public function studentAttendanceForm(Request $request){

        $data['teachers']=Employee::get();
        $data['students']=Student::get();
        return view('student.student_attendance',$data);
    }

public function studentAttendance(Request $request){
        $this->validate($request,[
            'student_name'=>'required',
            'teacher_name'=>'required',
            'attend_date'=>'required',
            'status'=>'required',
            'description'=>'nullable',
        ]);

        $result=StudentAttendance::create([
            'student_name'=>$request->student_name,
            'teacher_name'=>$request->teacher_name,
            'attend_date'=>$request->attend_date,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);
    if ($result){
        $request->session()->flash('success','Student attendance successful');
        return redirect()->route('student.attendance.form');
    }else{
        $request->session()->flash('success','Student attendance failed');
        return redirect()->route('student.attendance.form');
    }
}



}
