<?php


namespace App\Http\View;


use App\Models\ClassName;

use Illuminate\View\View;

class ClassComposer
{
    public function compose(View $view){

        $data['classes']=ClassName::get();

       $view->with($data);

    }
}
