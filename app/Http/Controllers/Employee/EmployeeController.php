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
            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'blood_group'=>'nullable',
            'marital_status'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'nullable',
            'contact_number'=>'required|unique:employees',
            'contact_number2'=>'nullable',


            'father_name'=>'required',
            'mother_name'=>'required',
            'emergency_number'=>'required',


            'designation'=>'required',
            'joining_date'=>'required',
            'education_qualification'=>'required',
            'nid'=>'required',
            'basic_salary'=>'required',
            'subject_speciality'=>'nullable',
            'others_honorarium'=>'nullable',

            'photo'=>'nullable',
            'email'=>'nullable|unique:employees',
            'password'=>'nullable|min:6|max:20',
            'confirm_password'=>'nullable|same:password|min:6|max:20',
        ]);
    $photo_path= $request->photo->store('gallery');

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
            'emergency_number'=>$request->emergency_number,
            'joining_date'=>$request->joining_date,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'contact_number'=>$request->contact_number,
            'contact_number2'=>$request->contact_number2,
            'basic_salary'=>$request->basic_salary,
            'subject_speciality'=>$request->subject_speciality,
            'others_honorarium'=>$request->others_honorarium,
            'photo'=>$photo_path,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

    if ($result){
        $request->session()->flash('success','Employee join successfully');
        return redirect()->route('employee.join.form');
    }else{
        $request->session()->flash('success','Employee join failed');
        return redirect()->route('employee.join.form');
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
        return redirect()->route('employee.attendance.form');
    }else{
        $request->session()->flash('success','Employee attendance create failed');
        return redirect()->route('employee.attendance.form');
    }



}

public function employeeList(Request $request){
    $search=$request->search;
    $token=$request->_token;
    if($search=='' && $token==''){

        $data['employee_lists']=Employee::orderBy('user_type')->paginate(20);
        $data['counts']=Employee::count();
    }else{
        $data['counts']=Employee::count();
        $data['employee_lists']=Employee::orWhere('designation', 'LIKE', '%'.$search.'%')
            ->orWhere('first_name', 'LIKE', '%'.$search.'%')
            ->orWhere('last_name', 'LIKE', '%'.$search.'%')
            ->orWhere('contact_number', 'LIKE', '%'.$search.'%')
            ->paginate(20);

    }

        return view('employee.employee_lists',$data);
}

public function employeeProfile($id){
    $data['employee_profile']=Employee::find($id);
        return view('employee.employee_profile',$data);
}


}
