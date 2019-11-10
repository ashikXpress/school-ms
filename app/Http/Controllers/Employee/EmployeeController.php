<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeAttendance;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function joinEmployeeForm(){
        $data['designations']=Designation::get();

        return view('employee.join_employee',$data);
    }

public function joinEmployee(Request $request){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'user_type'=>'required',
            'designation'=>'required',
            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'nid'=>'required',
            'blood_group'=>'required',
            'marital_status'=>'nullable',
            'education_qualification'=>'required',
            'father_name'=>'required',
           'mother_name'=>'required',
           'joining_date'=>'nullable',
            'address'=>'required',
            'address2'=>'nullable',
            'contact_number'=>'required|unique:employees',
            'contact_number2'=>'nullable',
            'basic_salary'=>'required',
            'subject_speciality'=>'nullable',
            'others_honorarium'=>'nullable',
            'email'=>'required|unique:employees',
            'password'=>'required|min:6|max:20',
            'retype_password'=>'required|same:password|min:6|max:20',
        ]);
        $result=Employee::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'user_type'=>$request->user_type,
            'designation'=>$request->designation,
            'gender_name'=>$request->gender_name,
            'date_of_birth'=>$request->date_of_birth,
            'nid'=>$request->nid,
            'blood_group'=>$request->blood_group,
            'marital_status'=>$request->marital_status,
            'education_qualification'=>$request->education_qualification,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'joining_date'=>$request->joining_date,
            'address'=>$request->address,
            'address2'=>$request->address2,
            'contact_number'=>$request->contact_number,
            'contact_number2'=>$request->contact_number2,
            'basic_salary'=>$request->basic_salary,
            'subject_speciality'=>$request->subject_speciality,
            'others_honorarium'=>$request->others_honorarium,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

    if ($result){
        $request->session()->flash('success','Employee join successfully');
        return redirect()->route('join.employee.form');
    }else{
        $request->session()->flash('success','Employee join failed');
        return redirect()->route('join.employee.form');
    }
}

public function attendanceEmployeeForm(){
        $data['employees']=Employee::get();
        return view('employee.attendance_employee',$data);
}
public function attendanceEmployee(Request $request){
        $this->validate($request,[
            'employee_name'=>'required',
            'attend_date'=>'required',
            'status'=>'required',
            'description'=>'nullable',
        ]);

    $result=EmployeeAttendance::create([
        'employee_name'=>$request->employee_name,
        'attend_date'=>$request->attend_date,
        'status'=>$request->status,
        'description'=>$request->description,
    ]);

    if ($result){
        $request->session()->flash('success','Employee attendance successful');
        return redirect()->route('attendance.employee.form');
    }else{
        $request->session()->flash('success','Employee attendance create failed');
        return redirect()->route('attendance.employee.form');
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
