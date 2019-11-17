<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
public function __construct()
{
//    $this->middleware('super.admin');
}

    public function home(){
        return redirect()->route('dashboard');
    }
    public function dashboard(){
//        Artisan::call('backup:run');
//
        return view('dashboard');
    }
}
