<?php

namespace App\Http\Controllers\StudentPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function studentDashboard(){

      return view('student_panel.student_dashboard');
  }
}
