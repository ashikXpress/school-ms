<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Syllabus extends Model
{
    protected $guarded=[];
    protected $table='syllabus';

    public function className() {
        return $this->belongsTo(ClassName::class, 'class_id');
    }
    public function subject() {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function examTerm() {
        return $this->belongsTo(ExaminationTerm::class, 'examination_term_id');
    }


}
