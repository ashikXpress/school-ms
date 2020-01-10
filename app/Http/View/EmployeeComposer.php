<?php


namespace App\Http\View;


use App\Models\Employee;
use App\Models\User;
use Illuminate\View\View;

class EmployeeComposer
{
    public function compose(View $view){

        $data['employees']=User::get();

       $view->with($data);

    }
}
