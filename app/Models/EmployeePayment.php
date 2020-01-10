<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeePayment extends Model
{
    protected $guarded=[];
    protected $table='employees_payments';

    public function employee(){
        return $this->belongsTo(User::class,'employee_id');
    }
    public function paymentBy(){
        return $this->belongsTo(User::class,'payment_by');
    }
}
