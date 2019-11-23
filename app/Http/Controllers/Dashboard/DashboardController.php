<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
public function __construct()
{
    $this->middleware('admin');

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
