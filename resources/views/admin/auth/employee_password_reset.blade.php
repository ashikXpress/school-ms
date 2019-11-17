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
            @if(session()->has('success'))
                <span class="text text-success">
                             {{session()->get('success')}}
                         </span>
            @endif
        </div>
        <!-- social login buttons start -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <form  class="loginForm" action="{{route('employee.reset.password',$token)}}" method="POST">
                    @csrf

                    <div class="pwdMask">
                        <input type="password" class="form-control password" name="new_password" value="{{old('new_password')}}" placeholder="New password">
                        <span class="text text-danger">{{$errors->first('new_password')}}</span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                    </div>
                    <div class="pwdMask">
                        <input type="password" class="form-control password" name="confirm_password" value="{{old('confirm_password')}}" placeholder="Confirm password">
                        <span class="text text-danger">{{$errors->first('confirm_password')}}</span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                    </div>
                    <div class="row remember-row">

                        <div class="col-xs-6 col-sm-6 col-md-offset-6">
                            <p class="forgotPwd">
                                <a  href="{{route('login.form')}}">Login to your account?</a>
                            </p>
                        </div>
                    </div> <!-- ./remember-row -->
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Password reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- ./panel-login -->



@endsection
