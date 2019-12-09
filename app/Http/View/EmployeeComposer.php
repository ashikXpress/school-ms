<?php


namespace App\Http\View;


use App\Models\Employee;
use Illuminate\View\View;

class EmployeeComposer
{
    public function compose(View $view){

        $data['employees']=Employee::get();

       $view->with($data);

    }
}
