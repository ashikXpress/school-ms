@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create Admin</header>
                    <button id="panel-button3"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button3">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('create.admin')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" class="form-control" placeholder="Enter last name">
                                <span class="text text-danger">{{$errors->first('last_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mobile_number">Mobile number</label>
                                <input type="number" name="mobile_number" value="{{old('mobile_number')}}" id="mobile_number" class="form-control" placeholder="Enter mobile number">
                                <span class="text text-danger">{{$errors->first('mobile_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control" placeholder="Enter password">
                                <span class="text text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="retype_password">Password</label>
                                <input type="password" name="retype_password" value="{{old('retype_password')}}" id="retype_password" class="form-control" placeholder="Enter retype password">
                                <span class="text text-danger">{{$errors->first('retype_password')}}</span>
                            </div>

                                <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create admin</button>
                                    <a class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
