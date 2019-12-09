<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePayment extends Model
{
    protected $guarded=[];
    protected $table='employees_payments';

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
    public function paymentBy(){
        return $this->belongsTo(Employee::class,'payment_by');
    }
}
