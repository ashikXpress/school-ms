<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\EmployeePayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function employeePaymentForm(){
        return view('payment.employee_payment');
    }

    public function employeePayment(Request $request){
        $this->validate($request,[
            'employee_name'=>'required',
            'payment_type'=>'required',
            'payment_date'=>'required',
            'receipt_no'=>'required',
            'basic_salary'=>'required',
            'others_honorarium'=>'nullable',
        ]);

        EmployeePayment::create([
            'employee_id'=>$request->employee_name,
            'payment_date'=>$request->payment_date,
            'payment_type'=>$request->payment_type,
            'receipt_no'=>$request->receipt_no,
            'basic_salary'=>$request->basic_salary,
            'others_honorarium'=>$request->others_honorarium,
            'payment_by'=>Auth::guard('employee')->user()->id,
        ]);

        $request->session()->flash('success','Payment Successful');
        return redirect()->back();
    }

    public function employeePaymentEdit($id){
        $data['payment']=EmployeePayment::find($id);
        return view('payment.employee_payment_edit',$data);
    }


    public function employeePaymentUpdate($id,Request $request){
        $this->validate($request,[
            'employee_name'=>'required',
            'payment_type'=>'required',
            'payment_date'=>'required',
            'receipt_no'=>'required',
            'basic_salary'=>'required',
            'others_honorarium'=>'nullable',
        ]);
    EmployeePayment::find($id)->update([
        'employee_id'=>$request->employee_name,
        'payment_date'=>$request->payment_date,
        'payment_type'=>$request->payment_type,
        'receipt_no'=>$request->receipt_no,
        'basic_salary'=>$request->basic_salary,
        'others_honorarium'=>$request->others_honorarium,
        'payment_by'=>Auth::guard('employee')->user()->id,
    ]);
        $request->session()->flash('success','Payment Update Successful');
        return redirect()->back();
    }
    public function employeePaymentList(){
        $data['payments']=EmployeePayment::paginate(20);
        $data['counts']=EmployeePayment::count();
        return view('payment.employee_payment_list',$data);
    }
}
