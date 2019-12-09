<?php


namespace App\Http\View;

use App\Models\Subject;
use Illuminate\View\View;

class SubjectComposer
{
    public function compose(View $view){

        $data['subjects']=Subject::get();

       $view->with($data);

    }
}
