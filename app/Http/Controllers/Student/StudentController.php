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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('employee.login');
    }

    public function studentAdmissionForm(){
        $data['sections']=Section::get();
        $data['classes']=ClassName::get();

        return view('student.student_admission',$data);
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
            'reg'=>'nullable|unique:students',
            'id_number'=>'required|unique:students',
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
            'reg'=>$request->reg,
            'id_number'=>$request->id_number,
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

    public function studentEditForm($id){
        $data['sections']=Section::get();
        $data['classes']=ClassName::get();
        $data['student']=Student::find($id);

        return view('student.student_edit',$data);
    }
public function studentUpdate($id,Request $request){
        $data=$this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'blood_group'=>'nullable',
            'present_address'=>'required',
            'permanent_address'=>'nullable',
            'contact_number'=>'required',
            'contact_number2'=>'nullable',

            'class'=>'required',
            'roll'=>'required',
            'reg'=>'nullable',
            'id_number'=>'required',
            'section'=>'nullable',
            'shift'=>'nullable',
            'group'=>'nullable',
            'admission_date'=>'required',
            'admission_fees'=>'required',
            'birth_certificate_number'=>'required',
            'transport'=>'nullable',
            'previous_institute_name'=>'nullable',

            'father_name'=>'required',
            'father_contact_number'=>'required',
            'father_occupation'=>'required',
            'mother_name'=>'required',
            'mother_contact_number'=>'nullable',
            'mother_occupation'=>'nullable',
            'local_guardian_name'=>'nullable',

            'email'=>'required',
            'photo'=>'nullable',

        ]);

        $result=Student::find($id)->update($data);
    if ($result){
        $request->session()->flash('success','Student data updated successfully');
        return redirect()->back();
    }else{
        $request->session()->flash('success','Student data update failed');
        return redirect()->back();
    }

}


    public function studentList(Request $request){

        $search=$request->search;
        $token=$request->_token;
        if($search=='' && $token==''){

            $data['student_lists']=Student::orderBy('class','asc')->paginate(20);
            $data['counts']=Student::count();
        }else{
            $data['counts']=Student::count();
            $data['student_lists']=Student::orWhere('class', 'LIKE', '%'.$search.'%')
                ->orWhere('roll', 'LIKE', '%'.$search.'%')
                ->orWhere('first_name', 'LIKE', '%'.$search.'%')
                ->orWhere('last_name', 'LIKE', '%'.$search.'%')
                ->orWhere('contact_number', 'LIKE', '%'.$search.'%')
                ->paginate(20);

        }


        return view('student.student_lists',$data);
    }


    public function studentProfile($id){
        $data['student_profile']=Student::find($id);
        return view('student.student_profile',$data);
    }

    public function studentAttendanceForm(Request $request){



        $data['classes']=ClassName::get();
        $data['sections']=Section::get();
        $class=$request->class;
        $shift=$request->shift;
        $section=$request->section;


        if ($class!='' && $shift=='' && $section==''){

            $data['student_search_lists']=Student::Where('class',$class)->get();


            }elseif ($class!='' && $shift!='' && $section=='')
        {
            $data['student_search_lists']=Student::Where('class',$class)->where('shift',$shift)->get();

        }elseif ($class!='' && $shift!='' && $section!=''){
            $data['student_search_lists']=Student::Where('class',$class)->where('shift',$shift)->where('section',$section)->get();

        }elseif ($class=='' && $shift!='' && $section==''){
            $data['student_search_lists']=Student::where('shift',$shift)->get();

        }elseif ($class=='' && $shift=='' && $section!=''){
            $data['student_search_lists']=Student::where('section',$section)->get();

        }elseif ($class!='' && $shift=='' && $section!=''){
            $data['student_search_lists']=Student::where('class',$class)->where('section',$section)->get();

        }elseif ($class=='' && $shift!='' && $section!=''){
            $data['student_search_lists']=Student::where('shift',$shift)->where('section',$section)->get();

        }


        return view('student.student_attendance',$data);
    }



public function studentAttendance(Request $request){



    $allstatus=$request->status;



    foreach ($allstatus as $status) {
        $result=StudentAttendance::create([
            'student_name'=>$request->student_name,
//            'teacher_name'=>\auth()->guard('employee')->user()->id,
            'teacher_name'=>'1',
            'attend_date'=>Carbon::now(),
            'status'=>$status,
            'description'=>$request->description,
        ]);
    }


    if ($result){
        $request->session()->flash('success','Student attendance successful');
        return redirect()->route('student.attendance.form');
    }else{
        $request->session()->flash('success','Student attendance failed');
        return redirect()->route('student.attendance.form');
    }
}



}
