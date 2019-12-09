<?php


namespace App\Http\View;

use App\Models\Section;
use Illuminate\View\View;

class SectionComposer
{
    public function compose(View $view){

        $data['sections']=Section::get();

       $view->with($data);

    }
}
