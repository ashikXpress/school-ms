@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Student Admission Form</header>
                    <button id="panel-button3"
                            class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded="MaterialButton">
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
                    <form action="{{route('student.admission')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8"><h4>Academic details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="class">Class (*Required)</label>
                                <select class="form-control" name="class" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($classes as $class)
                                    <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="roll">Roll (*Required)</label>
                                <input type="number" name="roll" value="{{old('roll')}}" id="roll" class="form-control" placeholder="Enter roll number">
                                <span class="text text-danger">{{$errors->first('roll')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="id_number">ID number/Login id (*Required)</label>
                                <input type="number" name="id_number" value="{{old('id_number')}}" id="id_number" class="form-control" placeholder="Enter ID number/login id number">
                                <span class="text text-danger">{{$errors->first('id_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="reg">Registration (Optional)</label>
                                <input type="number" name="reg" value="{{old('reg')}}" id="reg" class="form-control" placeholder="Enter registration number">
                                <span class="text text-danger">{{$errors->first('reg')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="section">Section (Optional)</label>
                                <select class="form-control" name="section" id="section">
                                    <option disabled selected>Select section</option>
                                    @foreach($sections as $section)
                                    <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('section')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="shift">Shift (Optional)</label>
                                <select class="form-control" name="shift" id="shift">
                                    <option disabled selected>Select shift</option>
                                    <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>
                                    <option value="Day" @if(old('shift') == 'Day')selected @endif>Day</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('shift')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="group">Group (Optional)</label>
                                <select class="form-control" name="group" id="group">
                                    <option disabled selected>Select group</option>
                                    <option value="Science" @if(old('group') == 'Science')selected @endif>Science</option>
                                    <option value="Humanity" @if(old('group') == 'Humanity')selected @endif>Humanity</option>
                                    <option value="Commerce" @if(old('group') == 'Commerce')selected @endif>commerce</option>
                                </select>
                                <span class="text text-danger">{{$errors->first('group')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="birth_certificate_number">Birth certificate number (*Required)</label>
                                <input type="text" name="birth_certificate_number" value="{{old('birth_certificate_number')}}" id="birth_certificate_number" class="form-control" placeholder="Enter Birth certificate number">
                                <span class="text text-danger">{{$errors->first('birth_certificate_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp2">Admission date (*Required)</label>
                                <div class="input-append date" id="dp2">
                                    <input class="form-control formDatePicker" name="admission_date" value="{{old('admission_date')}}"  placeholder="Enter date of birth" size="44" type="text"   aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                </div>
                                <span class="text text-danger">{{$errors->first('admission_date')}}</span>

                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Admission fees (*Required)</label>
                                <input type="number" name="admission_fees" value="{{old('admission_fees')}}" id="admission_fees" class="form-control" placeholder="Enter admission fees">
                                <span class="text text-danger">{{$errors->first('admission_fees')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="previous_institute_name">Previous institute name (Optional)</label>
                                <input type="text" name="previous_institute_name" value="{{old('previous_institute_name')}}" id="previous_institute_name" class="form-control" placeholder="Enter previous institute name">
                                <span class="text text-danger">{{$errors->first('previous_institute_name')}}</span>
                            </div>

                            <div class="col-md-6 col-sm-6 ">

                                <div class="row col-md-12 top-padd-less">
                                    <label class="col-md-5">Transport (Optional)</label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="transport" id="transport" value="0"  {{ old('transport') == '0' ? 'checked' : ''}}>
                                        <label for="transport">Yes</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="transport" id="transport2" value="1"  {{ old('transport') == '1' ? 'checked' : ''}}>
                                        <label for="transport2">No</label>
                                    </div>
                                    <span class="text text-danger">{{$errors->first('transport')}}</span>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-8"><h4>Personal details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="first_name">First name (*Required)</label>
                                <input type="text" name="first_name" value="{{old('first_name')}}" id="first_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="last_name">Last name (*Required)</label>
                                <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('last_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp1">Date of birth (*Required)</label>
                                <div class="input-append date" id="dp1">
                                    <input class="form-control formDatePicker" name="date_of_birth" value="{{old('date_of_birth')}}"  placeholder="Enter date of birth" size="44" type="text" aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                    <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>
                                </div>

                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Blood group (Optional)</label>
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
                                <label for="address">Present address (*Required)</label>
                                <textarea name="present_address" id="present_address" class="form-control" rows="3" placeholder="Enter present address">{{old('present_address')}}</textarea>
                                <span class="text text-danger">{{$errors->first('present_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="permanent_address">Permanent address (Optional)</label>
                                <textarea class="form-control" name="permanent_address" id="permanent_address"  rows="3" placeholder="Enter permanent address">{{old('permanent_address')}}</textarea>
                                <span class="text text-danger">{{$errors->first('permanent_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number">Contact number (*Required)</label>
                                <input type="number" name="contact_number" value="{{old('contact_number')}}" id="contact_number" class="form-control" placeholder="Enter contact number">
                                <span class="text text-danger">{{$errors->first('contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number2">Contact number 2 (Optional)</label>
                                <input type="number" name="contact_number2" value="{{old('contact_number2')}}" id="contact_number2" class="form-control" placeholder="Enter contact number 2">
                                <span class="text text-danger">{{$errors->first('contact_number2')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12">
                                    <label class="padd-less-right">Gender (*Required) </label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name" id="optionsRadios1" value="0" {{ old('gender_name') == '0' ? 'checked' : ''}}>
                                        <label for="optionsRadios1">Male</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name"  id="optionsRadios2" value="1" {{ old('gender_name') == '1' ? 'checked' : ''}}>
                                        <label for="optionsRadios2">Female</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('gender_name')}}</span>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8"><h4>Parent's details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_name">Father's name (*Required)</label>
                                <input type="text" name="father_name" value="{{old('father_name')}}" id="father_name" class="form-control" placeholder="Enter father's name">
                                <span class="text text-danger">{{$errors->first('father_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_contact_number">Father's contact number (*Required)</label>
                                <input type="number" name="father_contact_number" value="{{old('father_contact_number')}}" id="father_contact_number" class="form-control" placeholder="Enter father contact number">
                                <span class="text text-danger">{{$errors->first('father_contact_number')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_occupation">Father's occupation (*Required)</label>
                                <input type="text" name="father_occupation" value="{{old('father_occupation')}}" id="father_occupation" class="form-control" placeholder="Enter father's occupation">
                                <span class="text text-danger">{{$errors->first('father_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_name">Mother's name (*Required)</label>
                                <input type="text" name="mother_name" value="{{old('mother_name')}}" id="mother_name" class="form-control" placeholder="Enter mother's name">
                                <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_contact_number">Mother's contact number (Optional)</label>
                                <input type="number" name="mother_contact_number" value="{{old('mother_contact_number')}}" id="mother_contact_number" class="form-control" placeholder="Enter mother contact number">
                                <span class="text text-danger">{{$errors->first('mother_contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_occupation">Mother's occupation (Optional)</label>
                                <input type="text" name="mother_occupation" value="{{old('mother_occupation')}}" id="mother_occupation" class="form-control" placeholder="Enter mother's occupation">
                                <span class="text text-danger">{{$errors->first('mother_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="local_guardian_name">Local guardian name (Optional)</label>
                                <input type="text" name="local_guardian_name" value="{{old('local_guardian_name')}}" id="local_guardian_name" class="form-control" placeholder="Enter local guardian name">
                                <span class="text text-danger">{{$errors->first('local_guardian_name')}}</span>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-8"> <h4>Other's</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email address (*Required)</label>
                                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email address">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Photo (*Required)</label>
                                <input type="file" name="photo" value="{{old('photo')}}" id="photo" class="form-control" placeholder="Enter photo">
                                <span class="text text-danger">{{$errors->first('photo')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="password">Password (*Required)</label>
                                <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control" placeholder="Enter Password">
                                <span class="text text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="confirm_password">Confirm password (*Required)</label>
                                <input type="password" name="confirm_password" value="{{old('confirm_password')}}" id="confirm_password" class="form-control" placeholder="Enter confirm password">
                                <span class="text text-danger">{{$errors->first('confirm_password')}}</span>
                            </div>
                        </div>
                        <div class="row">
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
