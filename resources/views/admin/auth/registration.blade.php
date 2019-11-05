@extends('layouts.master_layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Create Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('create.admin')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" id="first_name" placeholder="Enter first name">
                            <span class="text text-danger">{{$errors->first('first_name')}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control" id="last_name" placeholder="Enter last name">
                            <span class="text text-danger">{{$errors->first('last_name')}}</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Enter email">
                            <span class="text text-danger">{{$errors->first('email')}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobile_number">Mobile number</label>
                            <input type="text" name="mobile_number" value="{{old('mobile_number')}}" class="form-control" id="mobile_number" placeholder="Enter mobile number">
                            <span class="text text-danger">{{$errors->first('mobile_number')}}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="{{old('password')}}" class="form-control" id="password" placeholder="Password">
                            <span class="text text-danger">{{$errors->first('password')}}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password">Retype password</label>
                            <input type="password" name="retype_password" value="{{old('retype_password')}}" class="form-control" id="retype_password" placeholder="Retype password">
                            <span class="text text-danger">{{$errors->first('retype_password')}}</span>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-lg">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
