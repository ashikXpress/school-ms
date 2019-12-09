<?php


namespace App\Http\View;


use App\Models\ClassName;

use App\Models\ExaminationTerm;
use Illuminate\View\View;

class ExamTermNameComposer
{
    public function compose(View $view){

        $data['exam_terms']=ExaminationTerm::get();

       $view->with($data);

    }
}
