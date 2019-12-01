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
                @if(session()->has('error'))
                    <h2 class="alert alert-danger">{{session()->get('error')}}</h2>
                @endif
                <p class="lt-pswrd">Lost your password? Please enter your Student ID/ Email Address/ Mobile Number.</p>
                <form class="{{route('student.password.recovery')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="credential">Student ID /Email Address/ Mobile Number</label>
                        <input type="text" id="credential" class="form-control" name="credential_name">
                        <span class="text text-danger">{{$errors->first('credential_name')}}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn mt_btn_yellow">Find</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End store -->

@endsection
