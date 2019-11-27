@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Employee join Form</header>
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
                    <form action="{{route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8"><h4>Personal details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="first_name">First name (*Required)</label>
                                <input type="text" name="first_name" value="{{$employee->first_name}}" id="first_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="last_name">Last name (*Required)</label>
                                <input type="text" name="last_name" value="{{$employee->last_name}}" id="last_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('last_name')}}</span>
                            </div>


                            <div class="form-group col-md-6 col-sm-6">
                                <label>User type (*Required)</label>
                                <select class="form-control" name="user_type" id="employeeusertype">
                                    @if(isset($employee->user_type))
                                        <option value="{{$employee->user_type}}">{{$employee->user_type}}</option>
                                    @endif

                                    <option value="superadmin" @if(old('user_type') == 'superadmin')selected @endif>Super Admin</option>
                                    <option value="admin" @if(old('user_type') == 'admin')selected @endif>Admin</option>
                                    <option value="teacher" @if(old('user_type') == 'teacher')selected @endif>Teacher</option>
                                    <option value="staff" @if(old('user_type') == 'staff')selected @endif>Staff</option>
                                </select>
                                <span class="text text-danger">{{$errors->first('user_type')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="blood_group">Blood group (Optional)</label>
                                <input type="text" name="blood_group" value="{{$employee->blood_group}}" id="blood_group" class="form-control" placeholder="Enter blood group">
                                <span class="text text-danger">{{$errors->first('blood_group')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dpicker1">Date of birth (*Required)</label>

                                <input id="dpicker1" readonly class="form-control" name="date_of_birth" value="{{$employee->date_of_birth}}"  placeholder="Enter date of birth" size="44" type="text" aria-invalid="false">

                                <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>


                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number">Contact number (*Required)</label>
                                <input type="text" name="contact_number" value="{{$employee->contact_number}}" id="contact_number" class="form-control" placeholder="Enter contact number">
                                <span class="text text-danger">{{$errors->first('contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number2">Contact number 2 (Optional)</label>
                                <input type="text" name="contact_number2" value="{{$employee->contact_number2}}" id="contact_number2" class="form-control" placeholder="Enter contact number 2">
                                <span class="text text-danger">{{$errors->first('contact_number2')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address">Present Address (*Required)</label>
                                <textarea name="present_address" id="present_address" class="form-control" rows="3" placeholder="Enter present address">{{$employee->present_address}}</textarea>
                                <span class="text text-danger">{{$errors->first('present_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="permanent_address">Permanent address (Optional)</label>
                                <textarea class="form-control" name="permanent_address" id="permanent_address"  rows="3" placeholder="Enter permanent address">{{$employee->permanent_address}}</textarea>
                                <span class="text text-danger">{{$errors->first('permanent_address')}}</span>
                            </div>


                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12 top-padd-less">
                                    <label class="padd-less-right">Gender (*Required)</label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name" id="optionsRadios1" value="{{$employee->gender_name}}" {{$employee->gender_name == '0' ? 'checked' : ''}}>
                                        <label for="optionsRadios1">Male</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name"  id="optionsRadios2" value="{{$employee->gender_name}}" {{ $employee->gender_name == '1'  ? 'checked' : ''}}>
                                        <label for="optionsRadios2">Female</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('gender_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12">
                                    <label class="padd-less-right">Marital status (*Required)</label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="marital_status" id="optionsRadios4" value="{{$employee->marital_status}}" {{ $employee->marital_status == '0'  ? 'checked' : ''}}>
                                        <label for="optionsRadios4">Married</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="marital_status"  id="optionsRadios3" value="{{$employee->marital_status}}" {{ $employee->marital_status == '1' ? 'checked' : ''}}>
                                        <label for="optionsRadios3">Unmarried</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('marital_status')}}</span>
                            </div>




                        </div>


                        <div class="row">
                            <div class="col-md-8"><h4>Official details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Designation (*Required)</label>
                                <select class="form-control" name="designation" id="designation">
                                    @if(isset($employee->designation))
                                        <option value="{{$employee->designation}}">{{$employee->designation}}</option>

                                    @endif

                                        @foreach($designations as $designation)
                                        <option value="{{$designation->designation_name}}" @if(old('designation') == $designation->designation_name)selected @endif>{{$designation->designation_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('designation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="nid">National Identity (*Required)</label>
                                <input type="number" name="nid" value="{{$employee->nid}}" id="nid" class="form-control" placeholder="Enter National Identity">
                                <span class="text text-danger">{{$errors->first('nid')}}</span>
                            </div>


                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dpicker2">Joining date (*Required)</label>

                                    <input id="dpicker2" readonly class="form-control" name="joining_date" value="{{$employee->joining_date}}"  placeholder="Enter joining date" size="44" type="text"   aria-invalid="false">
                                <span class="text text-danger">{{$errors->first('joining_date')}}</span>

                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="basic_salary">Basic salary (*Required)</label>
                                <input type="number" name="basic_salary" value="{{$employee->basic_salary}}" id="basic_salary" class="form-control" placeholder="Enter basic salary">
                                <span class="text text-danger">{{$errors->first('basic_salary')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="others_honorarium">Others honorarium (Optional)</label>
                                <input type="number" name="others_honorarium" value="{{$employee->others_honorarium}}" id="others_honorarium" class="form-control" placeholder="Enter others honorarium">
                                <span class="text text-danger">{{$errors->first('others_honorarium')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="subject_speciality">Subject speciality (Optional)</label>
                                <input type="text" name="subject_speciality" value="{{$employee->subject_speciality}}" id="subject_speciality" class="form-control" placeholder="Enter subject speciality">
                                <span class="text text-danger">{{$errors->first('subject_speciality')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="education_qualification">Education qualification (*Required)</label>
                                <textarea class="form-control" name="education_qualification" id="education_qualification"  rows="3" placeholder="Enter education qualification">{{$employee->education_qualification}}</textarea>
                                <span class="text text-danger">{{$errors->first('education_qualification')}}</span>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-8"><h4>Parent's details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_name">Father's name (*Required)</label>
                                <input type="text" name="father_name" value="{{$employee->father_name}}" id="father_name" class="form-control" placeholder="Enter father's name">
                                <span class="text text-danger">{{$errors->first('father_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_name">Mother's name (*Required)</label>
                                <input type="text" name="mother_name" value="{{$employee->mother_name}}" id="mother_name" class="form-control" placeholder="Enter mother's name">
                                <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="emergency_number">Emergency number (*Required)</label>
                                <input type="text" name="emergency_number" value="{{$employee->emergency_number}}" id="emergency_number" class="form-control" placeholder="Enter emergency number">
                                <span class="text text-danger">{{$errors->first('emergency_number')}}</span>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-8"><h4>Other's details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="photo">Photo (Optional)</label>
                                <input type="file" name="photo"  id="photo" class="form-control">
                                <span class="text text-danger">{{$errors->first('photo')}}</span>

                                <img src="{{$employee->photo}}" style="width: 50px" alt="">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email address (Optional)</label>
                                <input type="email" name="email" value="{{$employee->email}}" id="email" class="form-control" placeholder="Enter email address">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
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
