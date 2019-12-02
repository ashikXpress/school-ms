<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Notice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $data['notices']=Notice::select('title')->get();
        $data['teachers']=Employee::paginate(4);
        return view('fontend.home',$data);
    }

    public function teacherSlider(){
        $data['teachers']=Employee::get();
        return view('fontend.teacher_slider',$data);
    }
    public function gallery(){
        $data['galleries']=Gallery::paginate(9);

        return view('fontend.gallery',$data);
    }

    public function blog(){
        return view('fontend.blog');
    }

    public function contactUs(){
        return view('fontend.contact_us');
    }
    public function aboutUs(){
        return view('fontend.about_us');
    }

    public function events(){
        $data['events']=Event::paginate(6);
        return view('fontend.events',$data);
    }
    public function eventDetails($id){
        $data['event']=Event::find($id);
        return view('fontend.event_details',$data);
    }
}
