<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
public function __construct()
{
    $this->middleware('auth');

}


    public function dashboard(){
//        Artisan::call('backup:run');
//
        $data['student']=Student::count();
        $data['employee']=User::count();


        return view('dashboard',$data);
    }
}
