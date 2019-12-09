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
        $data['notices']=Notice::select('title')->get();
        $data['teachers']=Employee::paginate(8);
        return view('fontend.teacher_slider',$data);
    }
    public function gallery(){
        $data['galleries']=Gallery::paginate(9);
        $data['notices']=Notice::select('title')->get();
        return view('fontend.gallery',$data);
    }

    public function blog(){
        $data['notices']=Notice::select('title')->get();
        return view('fontend.blog',$data);
    }

    public function contactUs(){
        $data['notices']=Notice::select('title')->get();
        return view('fontend.contact_us',$data);
    }
    public function aboutUs(){
        $data['notices']=Notice::select('title')->get();
        return view('fontend.about_us',$data);
    }

    public function events(){
        $data['notices']=Notice::select('title')->get();
        $data['events']=Event::paginate(6);
        return view('fontend.events',$data);
    }
    public function eventDetails($id){
        $data['notices']=Notice::select('title')->get();
        $data['event']=Event::find($id);
        return view('fontend.event_details',$data);
    }
}
