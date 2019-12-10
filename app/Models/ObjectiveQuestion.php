<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectiveQuestion extends Model
{
    protected $guarded=[];
    protected $table='objective_questions';


    public function options()
    {
        return $this->hasMany(ObjectiveQuestionOption::class,'objective_question_id');
    }
}
