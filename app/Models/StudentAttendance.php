<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    protected $guarded=[];
    protected $table='students_attendances';

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
