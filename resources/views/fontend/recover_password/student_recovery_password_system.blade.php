@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Lost Password</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Lost Password</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->


    <!-- cart -->
    <section id="account" class="account section-padding section-inner">
        <div class="container">
            <div class="account-inner lost-pswrd">

                <p class="lt-pswrd">Please select your option</p>
                @if(session()->has('success'))
                    <h3 class="alert alert-success">{{session()->get('success')}}</h3>
                @endif
                <form class="{{route('student.password.recovery.system',$student->id)}}" method="post">
                    @csrf
                    <div class="form-group">

                        <input type="radio" id="mobile_email"  value="{{$student->contact_number}}" name="mobile_email" checked>
                        <label for="mobile_email">{{substr ($student->contact_number,0,3) }}******{{substr ($student->contact_number, -2) }}</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="mobile_email"  value="{{$student->email}}" name="mobile_email">
                        <label for="mobile_email">{{substr ($student->email,0,2) }}******{{substr ($student->email,-12) }}</label>
                    </div>
                    <div class="form-group">
                        <button class="btn mt_btn_yellow">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End store -->

@endsection
