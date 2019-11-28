<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $data['teachers']=Employee::paginate(4);
        return view('fontend.home',$data);
    }


}
