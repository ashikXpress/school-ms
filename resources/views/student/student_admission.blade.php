@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Student Admission Form</header>
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
                    <form action="{{route('student.admission')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('last_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp1">Date of birth</label>
                                <div class="input-append date" id="dp1">
                                    <input class="form-control formDatePicker" name="date_of_birth" value="{{old('date_of_birth')}}"  placeholder="Enter date of birth" size="44" type="text" aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                    <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>
                                </div>

                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="birth_certificate_number">Birth certificate number</label>
                                <input type="text" name="birth_certificate_number" value="{{old('birth_certificate_number')}}" id="birth_certificate_number" class="form-control" placeholder="Enter Birth certificate number">
                                <span class="text text-danger">{{$errors->first('birth_certificate_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Gender</label>
                                <div class="row col-md-12">
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name" id="optionsRadios1"  value="1" @if(old('gender_name')) checked @endif>
                                        <label for="optionsRadios1">Male</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name"  id="optionsRadios2" value="2" @if(old('gender_name')) checked @endif>
                                        <label for="optionsRadios2">Female</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('gender_name')}}</span>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label>Bus facility</label>
                                <div class="row col-md-12">
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="bus_facility" id="bus_facility1" value="yes" @if(old('bus_facility')) checked @endif>
                                        <label for="bus_facility1">Yes</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="bus_facility" id="bus_facility2" value="no" @if(old('bus_facility')) checked @endif>
                                        <label for="bus_facility2">No</label>
                                    </div>
                                    <span class="text text-danger">{{$errors->first('bus_facility')}}</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Blood group</label>
                                <select class="form-control" name="blood_group" id="bloodgroupselected">
                                    <option disabled selected>Selecte group</option>
                                    <option value="A+" @if(old('blood_group') == 'A+')selected @endif>A+</option>
                                    <option value="B+" @if(old('blood_group') == 'B+')selected @endif>B+</option>
                                    <option value="O+" @if(old('blood_group') == 'O+')selected @endif>O+</option>
                                    <option value="AB+" @if(old('blood_group') == 'AB+')selected @endif>AB+</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('blood_group')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="previous_institute_name">Previous institute name</label>
                                <input type="text" name="previous_institute_name" value="{{old('previous_institute_name')}}" id="previous_institute_name" class="form-control" placeholder="Enter previous institute name">
                                <span class="text text-danger">{{$errors->first('previous_institute_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="classseleted">Class name</label>
                                <select class="form-control" name="class_name"  id="classseleted">
                                    <option disabled selected>Selecte class</option>
                                    <option value="Nursary" @if(old('class_name') == 'Nursary')selected @endif>Nursary</option>
                                    <option value="One" @if(old('class_name') == 'One')selected @endif>One</option>
                                    <option value="Two" @if(old('class_name') == 'Two')selected @endif>Two</option>
                                    <option value="Three" @if(old('class_name') == 'Three')selected @endif>Three</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('class_name')}}</span>

                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_name">Father's name</label>
                                <input type="text" name="father_name" value="{{old('father_name')}}" id="father_name" class="form-control" placeholder="Enter father's name">
                                <span class="text text-danger">{{$errors->first('father_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_occupation">Father's occupation</label>
                                <input type="text" name="father_occupation" value="{{old('father_occupation')}}" id="father_occupation" class="form-control" placeholder="Enter father's occupation">
                                <span class="text text-danger">{{$errors->first('father_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_name">Mother's name</label>
                                <input type="text" name="mother_name" value="{{old('mother_name')}}" id="mother_name" class="form-control" placeholder="Enter mother's name">
                                <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_occupation">Mother's occupation</label>
                                <input type="text" name="mother_occupation" value="{{old('mother_occupation')}}" id="mother_occupation" class="form-control" placeholder="Enter mother's occupation">
                                <span class="text text-danger">{{$errors->first('mother_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="local_guardian_name">Local guardian name</label>
                                <input type="text" name="local_guardian_name" value="{{old('local_guardian_name')}}" id="local_guardian_name" class="form-control" placeholder="Enter local guardian name">
                                <span class="text text-danger">{{$errors->first('local_guardian_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control" rows="3" placeholder="Enter address">{{old('address')}}</textarea>
                                <span class="text text-danger">{{$errors->first('address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address2">Address 2</label>
                                <textarea class="form-control" name="address2" id="address2"  rows="3" placeholder="Enter address 2">{{old('address2')}}</textarea>
                                <span class="text text-danger">{{$errors->first('address2')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number">Contact number</label>
                                <input type="number" name="contact_number" value="{{old('contact_number')}}" id="contact_number" class="form-control" placeholder="Enter contact number">
                                <span class="text text-danger">{{$errors->first('contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number2">Contact number 2</label>
                                <input type="number" name="contact_number2" value="{{old('contact_number2')}}" id="contact_number2" class="form-control" placeholder="Enter contact number 2">
                                <span class="text text-danger">{{$errors->first('contact_number2')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp2">Admission date</label>
                                <div class="input-append date" id="dp2">
                                    <input class="form-control formDatePicker" name="admission_date" value="{{old('admission_date')}}"  placeholder="Enter date of birth" size="44" type="text"   aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                </div>
                                <span class="text text-danger">{{$errors->first('admission_date')}}</span>

                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Admission fees</label>
                                <input type="number" name="admission_fees" value="{{old('admission_fees')}}" id="admission_fees" class="form-control" placeholder="Enter admission fees">
                                <span class="text text-danger">{{$errors->first('admission_fees')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email address">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control" placeholder="Enter Password">
                                <span class="text text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Retype password</label>
                                <input type="password" name="retype_password" value="{{old('retype_password')}}" id="retype_password" class="form-control" placeholder="Enter retype password">
                                <span class="text text-danger">{{$errors->first('retype_password')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Submit</button>
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
