<?php

namespace App\Http\Controllers\Attendance;

use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeAttendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmployeeAttendanceController extends Controller
{
    public function attendanceEmployeeForm(Request $request)
    {

        $data['designations'] = Designation::get();
        $designation = $request->designation;

        $data_check=Carbon::now()->format('d-m-Y');

        $check_attendance=EmployeeAttendance::where('attend_date',$data_check)->first();


            if ($designation == 'all') {
                if ($check_attendance==null){
                    $data['employee_search_lists'] = Employee::get();
                }else{
                    $data['attendance_check']='Sorry, Already today attendance is taken. if you change any data then check employee attendance report';

                }

            }


        return view('attendance.attendance_employee',$data);
    }
    public function attendanceEmployee(Request $request){

        $all_employee=$request->employee_id;

        foreach($all_employee as $key=>$employee_id){

            $result=EmployeeAttendance::create([
                'employee_id'=>$employee_id,
                'attend_date'=>Carbon::now()->format('d-m-Y'),
                'status'=>$request->status[$key],
            ]);
        }



        if ($result){
            $request->session()->flash('success','Employee attendance successful');
            return redirect()->route('employee.attendance.form');
        }else{
            $request->session()->flash('success','Employee attendance create failed');
            return redirect()->route('employee.attendance.form');
        }



    }
public function attendanceEmployeeInfo(Request $request){
        $data['all_employee']=Employee::get();

        $from=$request->from_date;
        $to=$request->to_date;
        $employee_id=$request->employee_id;

        if ($from!='' && $to!='' && $employee_id!=''){

            $data['employees_attendance_info']=EmployeeAttendance::where('attend_date', '>=',$from)
                ->where('attend_date','<=',$to)->where('employee_id',$employee_id)->get();
        }elseif ($from!='' && $to!=''){
            $data['employees_attendance_info']=EmployeeAttendance::whereBetween('attend_date',[$from,$to])->orderBy('attend_date','asc')->get();
        }

    return view('attendance.employee_attendance_info',$data);
}

}
