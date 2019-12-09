@extends('layouts.student_layout')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="card card-topline-aqua">
            <div class="card-body no-padding height-9">
               <div class="row">
                   <div class="profile-userpic student-profile col-md-4">
                       <img src="{{asset('uploads/'.$student->photo)}}" class="img-responsive" alt="">
                   </div>
               </div>
                <div class="row">

                    <div class="col-md-1"></div>
                    <ul class="list-group col-md-10">
                        <li class="list-group-item">
                            <b>Name: </b>{{$student->first_name.' '.$student->last_name}}</li>
                        <li class="list-group-item"><b>Class: </b> {{$student->class}} </li>
                        <li class="list-group-item"><b>Roll:</b>{{$student->roll}}</li>
                        <li class="list-group-item"><b>ID Number:</b>{{$student->id_number}} </li>
                        <li class="list-group-item"><b>Date of Birth: </b>{{$student->date_of_birth}} </li>
                        <li class="list-group-item"><b>Bird Certificate Number: </b>{{$student->birth_certificate_number}} </li>
                        <li class="list-group-item"><b>Blood Group: </b>{{$student->blood_group}} </li>
                        <li class="list-group-item"><b>Contact Number: </b>{{$student->contact_number.' ,'.$student->contact_number2}} </li>
                        <li class="list-group-item"><b>Email: </b>{{$student->email}} </li>
                        <li class="list-group-item"><b>Father Name: </b>{{$student->father_name}} </li>
                        <li class="list-group-item"><b>Father Contact Number: </b>{{$student->father_contact_number}} </li>
                        <li class="list-group-item"><b>Mother Name: </b>{{$student->mother_name}} </li>
                        <li class="list-group-item"><b>Mother Contact Number: </b>{{$student->mother_contact_number}} </li>
                        <li class="list-group-item"><b>Local Guardian Name: </b>{{$student->local_guardian_name}} </li>
                        <li class="list-group-item"><b>Present Address: </b>{{$student->present_address}} </li>
                        <li class="list-group-item"><b>Permanent Address: </b>{{$student->permanent_address}} </li>
                    </ul>
                </div>
                <!-- END SIDEBAR USER TITLE -->

            </div>
        </div>
    </div>
</div>

@endsection
