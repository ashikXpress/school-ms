<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeAttendance;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function __construct()
    {

    }
    public function designationList(){
        $data['designations']=Designation::get();
        return view('academic.designation_list',$data);
    }
    public function createDesignationForm(){

        return view('academic.create_designation');
    }
    public function createDesignation(Request $request){
        $this->validate($request,[
            'designation_name'=>'required|unique:designations|min:1|max:50',
            'description'=>'nullable|min:5|max:300',
        ]);
        Designation::create([
            'designation_name'=>$request->designation_name,
            'description'=>$request->description,
        ]);

            $request->session()->flash('success','Designations created successfully');
            return redirect()->route('create.designation.form');

    }
public function editDesignation($id){

        $data['designation']=Designation::find($id);
    return view('academic.edit_designation',$data);
}

public function updateDesignation($id,Request $request){
    $this->validate($request,[
        'designation_name'=>'required|min:1|max:50',
        'description'=>'nullable|min:5|max:300',
    ]);
    Designation::find($id)->update([
        'designation_name'=>$request->designation_name,
        'description'=>$request->description,
    ]);

    $request->session()->flash('success','Designations Update successfully');
    return redirect()->back();
}

    public function joinEmployeeForm(){

        $data['designations']=Designation::get();

        return view('employee.join_employee',$data);
    }

public function joinEmployee(Request $request){
        $this->validate($request,[
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'role'=>'required|max:20',
            'photo'=>'required|image',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:password|min:6|max:20',



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

        ]);



        $result=User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role' => $request->role,
            'photo' =>$request->photo->store('gallery'),
            'password' => Hash::make($request->password),

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
        ]);

        $request->session()->flash('success','Employee join successfully');
        return redirect()->route('employee.join.form');

}

public function employeeEditForm($id){
        $data['designations']=Designation::get();
        $data['employee']=User::find($id);
        return view('employee.edit_employee',$data);
}

public function employeeUpdate($id,Request $request){
        $data=$this->validate($request,[
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'role'=>'required',
            'photo'=>'nullable|image',
            'email'=>'required',


            'gender_name'=>'required',
            'date_of_birth'=>'required',
            'blood_group'=>'nullable',
            'marital_status'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'nullable',
            'contact_number'=>'required',
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


        ]);




     User::find($id)->update($data);

        $request->session()->flash('success','Employee data updated successfully');
        return redirect()->back();

}



public function employeeList(Request $request){
    $search=$request->search;
    $token=$request->_token;
    if($search=='' && $token==''){

        $data['employee_lists']=User::paginate(20);
        $data['counts']=User::count();
    }else{
        $data['counts']=User::count();
        $data['employee_lists']=User::orWhere('designation', 'LIKE', '%'.$search.'%')
            ->orWhere('first_name', 'LIKE', '%'.$search.'%')
            ->orWhere('last_name', 'LIKE', '%'.$search.'%')
            ->orWhere('contact_number', 'LIKE', '%'.$search.'%')
            ->paginate(20);

    }

        return view('employee.employee_lists',$data);
}

public function employeeDetails($id){

    $data['employee']=User::find($id);
        return view('employee.employee_details',$data);
}
public function employeeProfile(){


        $id=Auth::id();
        $data['employee']=User::find($id);

   return view('employee.employee_profile',$data);
}
public function changePasswordFrom(){
        return view('password.employee_change_password');
}
public function changePassword(Request $request){
        $this->validate($request,[
            'old_password'=>'required|min:6|max:20',
            'new_password'=>'required|min:6|max:20',
            'confirm_password'=>'required|same:new_password|min:6|max:20',
        ]);

        $auth_login_id=Auth::id();

    $employeeObj=User::find($auth_login_id);

    $hashedPassword=$employeeObj->password;
    $oldPassword=$request->old_password;

    if(Hash::check($oldPassword, $hashedPassword))
    {
        User::find($auth_login_id)->update([
            'password'=>bcrypt($request->new_password),
        ]);
        $request->session()->flash('success','Password change successfully');
        return redirect()->back();
    }else{
        $request->session()->flash('error','Your old password is incorrect !!');
        return redirect()->back();
    }
}



}
