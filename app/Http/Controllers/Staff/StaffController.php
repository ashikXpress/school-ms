<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staffDashboard(){
        return view('staff.staff_dashboard');
    }
}
