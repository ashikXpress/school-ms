<?php

namespace App\Http\Controllers\Attendance;

use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeAttendance;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeeAttendanceController extends Controller
{
    public function attendanceEmployeeForm(Request $request)
    {

        $data['designations'] = Designation::get();
        $designation = $request->designation;


        if ($designation == 'all') {

            $data['employee_search_lists'] = Employee::get();
        } elseif ($designation) {
            $data['employee_search_lists'] = Employee::where('designation', $designation)->get();
        }

        return view('attendance.attendance_employee',$data);
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
            return redirect()->route('attendance.attendance.form');
        }else{
            $request->session()->flash('success','Employee attendance create failed');
            return redirect()->route('attendance.attendance.form');
        }



    }

}
