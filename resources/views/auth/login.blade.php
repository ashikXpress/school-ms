@extends('layouts.employee_auth_layout')

@section('content')
    <!-- panel-login start -->
    <div class="authfy-panel panel-login text-center active">
        <div class="authfy-heading">
            <h3 class="auth-title">{{ __('Login') }}</h3>
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
                    <input id="email" type="email" placeholder="Email address" class="form-control email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback text text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <br>
                    <div class="pwdMask">
                        <input id="password" type="password" placeholder="Password" class="form-control password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback text text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <span class="fa fa-eye-slash pwd-toggle"></span>

                    </div>
                    <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                            <label class="checkbox text-left">
                                <input type="checkbox" value="remember-me"><span class="label-text">{{ __('Remember Me') }}</span>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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




{{--    <div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
