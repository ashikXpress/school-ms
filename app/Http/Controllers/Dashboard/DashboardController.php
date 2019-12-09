<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
public function __construct()
{
    $this->middleware('admin');

}


    public function dashboard(){
//        Artisan::call('backup:run');
//
        $data['student']=Student::count();
        $data['employee']=Employee::count();


        return view('dashboard',$data);
    }
}
