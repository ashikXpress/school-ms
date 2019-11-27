<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('student');
    }

    public function studentDashboard(){

      return view('student_panel.student_dashboard');
  }

  public function studentLogout(){
      Session::flush ();
      Auth::guard('student')->logout();
      return redirect()->route('student.login.form');


  }
}
