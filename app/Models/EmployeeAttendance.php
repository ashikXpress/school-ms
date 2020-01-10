<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    protected $guarded=[];
    protected $table='employees_attendances';

    public function employee(){
        return $this->belongsTo(User::class,'employee_id');
    }
}
