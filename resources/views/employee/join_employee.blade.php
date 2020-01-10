@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Employee join Form</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('employee.join')}}" method="post" enctype="multipart/form-data">
                        @csrf

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
                                <label>User Role (*Required)</label>
                                <select class="form-control" name="role" id="employeeusertype">
                                    <option disabled selected>Selecte group</option>
                                    <option value="super_admin" @if(old('role') == 'super_admin')selected @endif>Super Admin</option>
                                    <option value="admin" @if(old('role') == 'admin')selected @endif>Admin</option>
                                    <option value="teacher" @if(old('role') == 'teacher')selected @endif>Teacher</option>
                                    <option value="staff" @if(old('role') == 'staff')selected @endif>Staff</option>
                                </select>
                                <span class="text text-danger">{{$errors->first('role')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="blood_group">Blood group (Optional)</label>
                                <input type="text" name="blood_group" value="{{old('blood_group')}}" id="blood_group" class="form-control" placeholder="Enter blood group">
                                <span class="text text-danger">{{$errors->first('blood_group')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp1">Date of birth (*Required)</label>

                                    <input id="dpicker1" readonly class="form-control" name="date_of_birth" value="{{old('date_of_birth')}}"  placeholder="Enter date of birth" size="44" type="text" aria-invalid="false">

                                    <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>



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
                                <label for="address">Present Address (*Required)</label>
                                <textarea name="present_address" id="present_address" class="form-control" rows="3" placeholder="Enter present address">{{old('present_address')}}</textarea>
                                <span class="text text-danger">{{$errors->first('present_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="permanent_address">Permanent address (Optional)</label>
                                <textarea class="form-control" name="permanent_address" id="permanent_address"  rows="3" placeholder="Enter permanent address">{{old('permanent_address')}}</textarea>
                                <span class="text text-danger">{{$errors->first('permanent_address')}}</span>
                            </div>


                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12 top-padd-less">
                                    <label class="padd-less-right">Gender (*Required)</label>
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

                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12">
                                    <label class="padd-less-right">Marital status (*Required)</label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="marital_status" id="optionsRadios4" value="0" {{ old('marital_status') == '0' ? 'checked' : ''}}>
                                        <label for="optionsRadios4">Married</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="marital_status"  id="optionsRadios3" value="1" {{ old('marital_status') == '1' ? 'checked' : ''}}>
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
                                    <option disabled selected>Selecte group</option>
                                    @foreach($designations as $designation)
                                        <option value="{{$designation->designation_name}}" @if(old('designation') == $designation->designation_name)selected @endif>{{$designation->designation_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('designation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="nid">National Identity (*Required)</label>
                                <input type="number" name="nid" value="{{old('nid')}}" id="nid" class="form-control" placeholder="Enter National Identity">
                                <span class="text text-danger">{{$errors->first('nid')}}</span>
                            </div>


                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dpicker2">Joining date (*Required)</label>

                                    <input id="dpicker2" readonly class="form-control" name="joining_date" value="{{old('joining_date')}}"  placeholder="Enter joining date" size="44" type="text"   aria-invalid="false">

                                <span class="text text-danger">{{$errors->first('joining_date')}}</span>

                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="basic_salary">Basic salary (*Required)</label>
                                <input type="number" name="basic_salary" value="{{old('basic_salary')}}" id="basic_salary" class="form-control" placeholder="Enter basic salary">
                                <span class="text text-danger">{{$errors->first('basic_salary')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="others_honorarium">Others honorarium (Optional)</label>
                                <input type="number" name="others_honorarium" value="{{old('others_honorarium')}}" id="others_honorarium" class="form-control" placeholder="Enter others honorarium">
                                <span class="text text-danger">{{$errors->first('others_honorarium')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="subject_speciality">Subject speciality (Optional)</label>
                                <input type="text" name="subject_speciality" value="{{old('subject_speciality')}}" id="subject_speciality" class="form-control" placeholder="Enter subject speciality">
                                <span class="text text-danger">{{$errors->first('subject_speciality')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="education_qualification">Education qualification (*Required)</label>
                                <textarea class="form-control" name="education_qualification" id="education_qualification"  rows="3" placeholder="Enter education qualification">{{old('education_qualification')}}</textarea>
                                <span class="text text-danger">{{$errors->first('education_qualification')}}</span>
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
                                <label for="mother_name">Mother's name (*Required)</label>
                                <input type="text" name="mother_name" value="{{old('mother_name')}}" id="mother_name" class="form-control" placeholder="Enter mother's name">
                                <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="emergency_number">Emergency number (*Required)</label>
                                <input type="number" name="emergency_number" value="{{old('emergency_number')}}" id="emergency_number" class="form-control" placeholder="Enter emergency number">
                                <span class="text text-danger">{{$errors->first('emergency_number')}}</span>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-8"><h4>Other's details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="photo">Photo (Optional)</label>
                                <input type="file" name="photo" value="{{old('photo')}}" id="photo" class="form-control">
                                <span class="text text-danger">{{$errors->first('photo')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email address (*Required)</label>
                                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control" placeholder="Enter email address">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
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
