@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card card-topline-aqua">
                <div class="card-body no-padding height-9">
                    <div class="row">
                        <div class="profile-userpic student-profile col-md-4">
                            <img src="{{asset('uploads/'.$employee->photo)}}" class="img-responsive" alt="">

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-1"></div>
                        <ul class="list-group col-md-10">
                            <li class="list-group-item">
                                <b>Name: </b>{{$employee->first_name.' '.$employee->last_name}}</li>

                            <li class="list-group-item"><b>Designation: </b>{{$employee->designation}} </li>
                            <li class="list-group-item"><b>Date of Join: </b>{{$employee->joining_date}} </li>
                            <li class="list-group-item"><b>Subject Speciality: </b>{{$employee->subject_speciality}} </li>
                            <li class="list-group-item"><b>Basic Salary: </b>{{$employee->basic_salary}} </li>
                            <li class="list-group-item"><b>Education Qualification: </b>{{$employee->education_qualification}} </li>
                            <li class="list-group-item"><b>User Role: </b>{{$employee->role}} </li>

                            <li class="list-group-item"><b>Date of Birth: </b>{{$employee->date_of_birth}} </li>
                            <li class="list-group-item"><b>National ID Number: </b>{{$employee->nid}} </li>
                            <li class="list-group-item"><b>Blood Group: </b>{{$employee->blood_group}} </li>

                            <li class="list-group-item"><b>Martial Status:</b>
                                @if($employee->marital_status=='1')
                                Married
                                    @else
                                    Unmarried
                                @endif
                            </li>

                            <li class="list-group-item"><b>Contact Number: </b>{{$employee->contact_number.' ,'.$employee->contact_number2}} </li>
                            <li class="list-group-item"><b>Email: </b>{{$employee->email}} </li>
                            <li class="list-group-item"><b>Father Name: </b>{{$employee->father_name}} </li>
                            <li class="list-group-item"><b>Mother Name: </b>{{$employee->mother_name}} </li>
                            <li class="list-group-item"><b>Emergency Number: </b>{{$employee->emergency_number}} </li>
                            <li class="list-group-item"><b>Present Address: </b>{{$employee->present_address}} </li>
                            <li class="list-group-item"><b>Permanent Address: </b>{{$employee->permanent_address}} </li>
                        </ul>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                </div>
            </div>
        </div>
    </div>

@endsection
