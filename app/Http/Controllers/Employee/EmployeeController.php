<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createDesignationForm(){
        return view('Employee.create_designation');
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
