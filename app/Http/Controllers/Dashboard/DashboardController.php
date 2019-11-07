<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function home(){
        return redirect()->route('dashboard');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
