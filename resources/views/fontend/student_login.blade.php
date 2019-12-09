@extends('layouts.fontend_layout')
@section('content')



    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>My Account</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Log In</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->


    <!-- cart -->
    <section id="account" class="account section-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <div class="account-inner">
                        <!-- section title -->
                        <div class="inner-heading">
                            <h3>Sign In</h3>
                        </div>
                        <form action="{{route('student.login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Username/Email Address:</label>
                                <input type="email" class="form-control" placeholder="Enter your emil/ID number" name="email" id="email">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="Password" class="form-control" placeholder="Enter your password" name="password" id="password">
                                <span class="text text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow">Login</button>
                                <input class="checkbox" type="checkbox"> <span>Remember me</span>
                            </div>
                            <p class="lost_password">
                                <a href="{{route('student.password.recovery.form')}}">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End store -->

@endsection
