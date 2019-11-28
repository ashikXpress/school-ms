@extends('layouts.student_layout')
@section('content')

    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
        <a class="btn btn-sm" href="javascript:window.print('idcard')">print</a>
        <div class="white-box border-gray" id="idcard">
            <h5 class="school-text">Ideal Model High School, Dhaka</h5>
            <div class="user-bg">

                <div class="overlay-box">
                    <div class="user-content">

                        <a href="javascript:void(0)">

                            <img alt="img" class="thumb-lg custom-card img-thumbnail" src="{{asset('uploads/'.$idcard->photo)}}">
                        </a>
                        <h4 class="text-white">{{$idcard->first_name.' '.$idcard->last_name}}</h4>

                    </div>
                </div>
            </div>
            <div class="user-btm-box">
              <p>Class: <span>{{$idcard->class}}</span></p>
              <p>Roll: <span>{{$idcard->roll}}</span></p>
              <p>Blood Group: <span>{{$idcard->blood_group}}</span></p>
              <p>Contact: <span>{{$idcard->contact_number}}</span></p>
            </div>
            <div class="user-btm-footer">
                <p>Validate up to 31 December-{{date('y')}}</p>
                <div class="sign-head-master">Head master<span>Ashik</span></div>
            </div>

            </div>
        </div>



@endsection
