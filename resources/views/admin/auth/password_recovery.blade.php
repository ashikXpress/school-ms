@extends('layouts.employee_auth_layout')
@section('content')

    <!-- panel-login start -->
    <div class="authfy-panel panel-login text-center active">

        <div class="authfy-heading">
            <h3 class="auth-title">Recover your password</h3>
            <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
            @if(session()->has('error'))
                    <span class="text text-danger">
                             {{session()->get('error')}}
                         </span>
            @endif
            @if(session()->has('success'))
                        <span class="text text-success">
                             {{session()->get('success')}}
                         </span>
            @endif
        </div>

        <!-- social login buttons start -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <form  class="loginForm" action="{{route('employee.recovery.password')}}" method="POST">
                    @csrf

                    <input type="email" class="form-control email" name="email" value="{{old('email')}}" placeholder="Email address">
                    <span class="text text-danger">{{$errors->first('email')}}</span>
                    <br>

                    <div class="row remember-row">

                        <div class="col-xs-6 col-sm-6 col-md-offset-6">
                            <p class="forgotPwd">

                                <a  href="{{route('login.form')}}">Login to your account?</a>

                            </p>
                        </div>
                    </div> <!-- ./remember-row -->
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Login with email</button>
                    </div>

                </form>
            </div>
        </div>
    </div> <!-- ./panel-login -->







@endsection
