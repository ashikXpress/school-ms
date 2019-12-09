<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\ClassName;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admissionForm(){
        $data['notices']=Notice::select('title')->get();
        $data['classes']=ClassName::select('class_name')->get();
        return view('fontend.admission.admission_form',$data);
    }

    public function admission(Request $request){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'contact_number'=>'required|unique:students',
            'contact_number2'=>'required',

            'class'=>'required',
            'birth_certificate_number'=>'required',

            'father_name'=>'required',
            'father_contact_number'=>'required|unique:students',
            'father_occupation'=>'required',
            'mother_name'=>'required',

            'email'=>'required|unique:students',
            'photo'=>'required',
        ]);

        $photo_path= $request->photo->store('gallery');
        Student::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender_name'=>$request->gender_name,
            'date_of_birth'=>$request->date_of_birth,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'contact_number'=>$request->contact_number,
            'contact_number2'=>$request->contact_number2,

            'class'=>$request->class,
            'birth_certificate_number'=>$request->birth_certificate_number,

            'father_name'=>$request->father_name,
            'father_contact_number'=>$request->father_contact_number,
            'father_occupation'=>$request->father_occupation,
            'mother_name'=>$request->mother_name,
            'admission_fees'=>'10.00',

            'email'=>$request->email,
            'photo'=>$photo_path,
        ]);

        $request->session()->flash('success','Successfully admission form submitted');
        return redirect()->route('admission.form');

    }
}
