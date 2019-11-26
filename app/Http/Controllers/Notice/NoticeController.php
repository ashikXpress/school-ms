<?php

namespace App\Http\Controllers\Notice;

use App\Models\Diary;
use App\Models\Student;
use App\Notifications\SmsNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class NoticeController extends Controller
{
    public function createDiaryForm(){
        $data['students']=Student::select('id','id_number','first_name','last_name')->get();
        return view('notice.create_student_diary',$data);
    }

    public function createDiary(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'student_id'=>'required',
            'diary'=>'required',
        ]);
        $diary=Diary::create([
            'title'=>$request->title,
            'student_id'=>$request->student_id,
            'diary'=>$request->diary,
        ]);


        $student=Student::where('id',$request->student_id)->first();

        $student->notify(new SmsNotification($diary));


        $request->session()->flash('success','Diary send successfully');
        return redirect()->route('create.diary.form');
    }
}
