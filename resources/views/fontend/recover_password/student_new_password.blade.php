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
                <li><a href="index.html">Home</a></li>
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
                            <h3>Password Reset</h3>
                            @if(session()->has('success'))
                                <h4 class="alert alert-success">{{session()->get('success')}}</h4>
                            @elseif(session()->has('error'))
                                <h4 class="alert alert-danger">{{session()->get('error')}}</h4>
                            @endif
                        </div>
                        <form action="{{route('student.password.reset',$token)}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="password">New Password:</label>
                                <input type="Password" class="form-control" placeholder="Enter your new password" name="new_password" id="new_password">
                                <span class="text text-danger">{{$errors->first('new_password')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="Password" class="form-control" placeholder="Enter your confirm password" name="confirm_password" id="confirm_password">
                                <span class="text text-danger">{{$errors->first('confirm_password')}}</span>
                            </div>
                            <div class="form-group">
                                <button class="mt_btn_yellow">Reset password</button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End store -->

@endsection

