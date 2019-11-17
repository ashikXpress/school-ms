@extends('layouts.employee_auth_layout')
@section('content')
    <!-- panel-login start -->
    <div class="authfy-panel panel-login text-center active">
        <div class="authfy-heading">
            <h3 class="auth-title">Login to your account</h3>
            @if(session()->has('error'))
                <span class="text text-danger">
                             {{session()->get('error')}}
                         </span>
            @endif
        </div>
        <!-- social login buttons start -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <form  class="loginForm" action="{{route('login')}}" method="POST">
                    @csrf

                    <input type="email" class="form-control email" name="email" value="{{old('email')}}" placeholder="Email address">
                    <span class="text text-danger">{{$errors->first('email')}}</span>
                    <br>
                    <div class="pwdMask">
                        <input type="password" class="form-control password" name="password" value="{{old('password')}}" placeholder="Password">
                        <span class="text text-danger">{{$errors->first('password')}}</span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                    </div>
                    <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                            <label class="checkbox text-left">
                                <input type="checkbox" value="remember-me"><span class="label-text">Remember me</span>
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <p class="forgotPwd">
                                <a  href="{{route('employee.recovery.password.form')}}">Forgot password?</a>
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
