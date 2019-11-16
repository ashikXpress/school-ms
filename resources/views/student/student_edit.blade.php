@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Student Update Form</header>
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
                    <form action="{{route('student.update',$student->id)}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8"><h4>Academic details</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="class">Class (*Required)</label>
                                <select class="form-control" name="class" id="class">
                                    @if(isset($student->class))
                                        <option value="{{$student->class}}">{{$student->class}}</option>
                                    @endif
                                    @foreach($classes as $class)
                                    <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="roll">Roll (*Required)</label>
                                <input type="number" name="roll" value="{{$student->roll}}" id="roll" class="form-control" placeholder="Enter roll number">
                                <span class="text text-danger">{{$errors->first('roll')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="id_number">ID number/Login id (*Required)</label>
                                <input type="text" name="id_number" value="{{$student->id_number}}" id="id_number" class="form-control" placeholder="Enter ID number/login id number">
                                <span class="text text-danger">{{$errors->first('id_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="reg">Registration (Optional)</label>
                                <input type="number" name="reg" value="{{$student->reg}}" id="reg" class="form-control" placeholder="Enter registration number">
                                <span class="text text-danger">{{$errors->first('reg')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="section">Section (Optional)</label>
                                <select class="form-control" name="section" id="section">
                                    @if(isset($student->section))
                                        <option value="{{$student->section}}">{{$student->section}}</option>
                                    @endif

                                    @foreach($sections as $section)
                                    <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('section')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="shift">Shift (Optional)</label>
                                <select class="form-control" name="shift" id="shift">
                                    @if(isset($student->shift))
                                        <option value="{{$student->shift}}">{{$student->shift}}</option>
                                    @endif

                                    <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>
                                    <option value="Day" @if(old('shift') == 'Day')selected @endif>Day</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('shift')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="group">Group (Optional)</label>
                                <select class="form-control" name="group" id="group">
                                    @if(isset($student->group))
                                        <option value="{{$student->group}}">{{$student->group}}</option>
                                    @endif
                                    <option value="Science" @if(old('group') == 'Science')selected @endif>Science</option>
                                    <option value="Humanity" @if(old('group') == 'Humanity')selected @endif>Humanity</option>
                                    <option value="Commerce" @if(old('group') == 'Commerce')selected @endif>commerce</option>
                                </select>
                                <span class="text text-danger">{{$errors->first('group')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="birth_certificate_number">Birth certificate number (*Required)</label>
                                <input type="text" name="birth_certificate_number" value="{{$student->birth_certificate_number}}" id="birth_certificate_number" class="form-control" placeholder="Enter Birth certificate number">
                                <span class="text text-danger">{{$errors->first('birth_certificate_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp2">Admission date (*Required)</label>
                                <div class="input-append date" id="dp2">
                                    <input class="form-control formDatePicker" name="admission_date" value="{{$student->admission_date}}"  placeholder="Enter date of birth" size="44" type="text"   aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                </div>
                                <span class="text text-danger">{{$errors->first('admission_date')}}</span>

                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Admission fees (*Required)</label>
                                <input type="number" name="admission_fees" value="{{$student->admission_fees}}" id="admission_fees" class="form-control" placeholder="Enter admission fees">
                                <span class="text text-danger">{{$errors->first('admission_fees')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="previous_institute_name">Previous institute name (Optional)</label>
                                <input type="text" name="previous_institute_name" value="{{$student->previous_institute_name}}" id="previous_institute_name" class="form-control" placeholder="Enter previous institute name">
                                <span class="text text-danger">{{$errors->first('previous_institute_name')}}</span>
                            </div>

                            <div class="col-md-6 col-sm-6 ">

                                <div class="row col-md-12 top-padd-less">
                                    <label class="col-md-5">Transport (Optional)</label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="transport" id="transport" value="{{$student->transport}}"  {{ $student->transport == '0' ? 'checked' : ''}}>
                                        <label for="transport">Yes</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="transport" id="transport2" value="{{$student->transport}}"  {{ $student->transport == '1' ? 'checked' : ''}}>
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
                                <input type="text" name="first_name" value="{{$student->first_name}}" id="first_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="last_name">Last name (*Required)</label>
                                <input type="text" name="last_name" value="{{$student->last_name}}" id="last_name" class="form-control" placeholder="Enter first name">
                                <span class="text text-danger">{{$errors->first('last_name')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="dp1">Date of birth (*Required)</label>
                                <div class="input-append date" id="dp1">
                                    <input class="form-control formDatePicker" name="date_of_birth" value="{{$student->date_of_birth}}"  placeholder="Enter date of birth" size="44" type="text" aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                    <span class="text text-danger">{{$errors->first('date_of_birth')}}</span>
                                </div>

                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="blood_group">Blood group (Optional)</label>
                                <input type="text" name="blood_group" value="{{$student->blood_group}}" id="blood_group" class="form-control" placeholder="Enter blood group">
                                <span class="text text-danger">{{$errors->first('blood_group')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="address">Present address (*Required)</label>
                                <textarea name="present_address" id="present_address" class="form-control" rows="3" placeholder="Enter present address">{{$student->present_address}}</textarea>
                                <span class="text text-danger">{{$errors->first('present_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="permanent_address">Permanent address (Optional)</label>
                                <textarea class="form-control" name="permanent_address" id="permanent_address"  rows="3" placeholder="Enter permanent address">{{$student->permanent_address}}</textarea>
                                <span class="text text-danger">{{$errors->first('permanent_address')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number">Contact number (*Required)</label>
                                <input type="text" name="contact_number" value="{{$student->contact_number}}" id="contact_number" class="form-control" placeholder="Enter contact number">
                                <span class="text text-danger">{{$errors->first('contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="contact_number2">Contact number 2 (Optional)</label>
                                <input type="text" name="contact_number2" value="{{$student->contact_number2}}" id="contact_number2" class="form-control" placeholder="Enter contact number 2">
                                <span class="text text-danger">{{$errors->first('contact_number2')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">

                                <div class="row col-md-12">
                                    <label class="padd-less-right">Gender (*Required) </label>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name" id="optionsRadios1" value="{{$student->gender_name}}" {{ $student->gender_name == '0'? 'checked' : ''}}>
                                        <label for="optionsRadios1">Male</label>
                                    </div>
                                    <div class="radio p-0 col-md-3">
                                        <input type="radio" name="gender_name"  id="optionsRadios2" value="{{$student->gender_name}}" {{ $student->gender_name == '1' ? 'checked' : ''}}>
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
                                <input type="text" name="father_name" value="{{$student->father_name}}" id="father_name" class="form-control" placeholder="Enter father's name">
                                <span class="text text-danger">{{$errors->first('father_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_contact_number">Father's contact number (*Required)</label>
                                <input type="text" name="father_contact_number" value="{{$student->father_contact_number}}" id="father_contact_number" class="form-control" placeholder="Enter father contact number">
                                <span class="text text-danger">{{$errors->first('father_contact_number')}}</span>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                <label for="father_occupation">Father's occupation (*Required)</label>
                                <input type="text" name="father_occupation" value="{{$student->father_occupation}}" id="father_occupation" class="form-control" placeholder="Enter father's occupation">
                                <span class="text text-danger">{{$errors->first('father_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_name">Mother's name (*Required)</label>
                                <input type="text" name="mother_name" value="{{$student->mother_name}}" id="mother_name" class="form-control" placeholder="Enter mother's name">
                                <span class="text text-danger">{{$errors->first('mother_name')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_contact_number">Mother's contact number (Optional)</label>
                                <input type="text" name="mother_contact_number" value="{{$student->mother_contact_number}}" id="mother_contact_number" class="form-control" placeholder="Enter mother contact number">
                                <span class="text text-danger">{{$errors->first('mother_contact_number')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="mother_occupation">Mother's occupation (Optional)</label>
                                <input type="text" name="mother_occupation" value="{{$student->mother_occupation}}" id="mother_occupation" class="form-control" placeholder="Enter mother's occupation">
                                <span class="text text-danger">{{$errors->first('mother_occupation')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="local_guardian_name">Local guardian name (Optional)</label>
                                <input type="text" name="local_guardian_name" value="{{$student->local_guardian_name}}" id="local_guardian_name" class="form-control" placeholder="Enter local guardian name">
                                <span class="text text-danger">{{$errors->first('local_guardian_name')}}</span>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-8"> <h4>Other's</h4></div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="email">Email address (*Required)</label>
                                <input type="email" name="email" value="{{$student->email}}" id="email" class="form-control" placeholder="Enter email address">
                                <span class="text text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label for="photo">Photo (optional)</label>
                                <input type="file" name="photo" id="photo" class="form-control" placeholder="Enter photo">
                                <span class="text text-danger">{{$errors->first('photo')}}</span><br>
                                <img src="{{$student->photo}}" style="width:50px;" alt="">
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
