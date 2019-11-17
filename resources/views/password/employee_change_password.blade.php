@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Change password</header>
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
                    <form action="{{route('employee.change.password')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="old_password">Old password</label>
                                <input type="password" name="old_password" value="{{old('old_password')}}" id="old_password" class="form-control" placeholder="Enter old password">
                                <span class="text text-danger">{{$errors->first('old_password')}}</span>
                            </div>
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="new_password">New password</label>
                                <input type="password" name="new_password" value="{{old('new_password')}}" id="new_password" class="form-control" placeholder="Enter new password">
                                <span class="text text-danger">{{$errors->first('new_password')}}</span>
                            </div>
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="confirm_password">Confirm password</label>
                                <input type="password" name="confirm_password" value="{{old('confirm_password')}}" id="confirm_password" class="form-control" placeholder="Enter confirm password">
                                <span class="text text-danger">{{$errors->first('confirm_password')}}</span>
                            </div>



                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Change password</button>
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
