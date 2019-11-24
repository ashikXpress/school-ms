@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create class routine</header>
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
                    <form action="{{route('create.class.routine')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="class">Day</label>
                                <select class="form-control" name="day" id="class">
                                    <option disabled selected>Select day</option>

                                    <option value="Saturday" @if(old('day') == 'Saturday')selected @endif>Saturday</option>
                                    <option value="Sunday" @if(old('day') == 'Sunday')selected @endif>Sunday</option>
                                    <option value="Monday" @if(old('day') == 'Monday')selected @endif>Monday</option>
                                    <option value="Tuesday" @if(old('day') == 'Tuesday')selected @endif>Tuesday</option>
                                    <option value="Wednesday" @if(old('day') == 'Wednesday')selected @endif>Wednesday</option>
                                    <option value="Thursday" @if(old('day') == 'Thursday')selected @endif>Thursday</option>
                                    <option value="Friday" @if(old('day') == 'Friday')selected @endif>Friday</option>
                                </select>

                                <span class="text text-danger">{{$errors->first('day')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label for="class">Class name</label>
                                <select class="form-control classname" name="class" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($class_names as $class_name)
                                        <option value="{{$class_name->class_name}}" @if(old('class') == $class_name->class_name)selected @endif>{{$class_name->class_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="class">Period</label>
                                <select class="form-control" name="period" id="class">
                                    <option disabled selected>Select period</option>
                                    <option value="1st" @if(old('period') == '1st')selected @endif>1st</option>
                                    <option value="2nd" @if(old('period') == '2nd')selected @endif>2nd</option>
                                    <option value="3rd" @if(old('period') == '3rd')selected @endif>3rd</option>
                                    <option value="4th" @if(old('period') == '4th')selected @endif>4th</option>
                                    <option value="5th" @if(old('period') == '5th')selected @endif>5th</option>
                                    <option value="6th" @if(old('period') == '6th')selected @endif>6th</option>
                                    <option value="7th" @if(old('period') == '7th')selected @endif>7th</option>
                                    <option value="8th" @if(old('period') == '8th')selected @endif>8th</option>
                                </select>

                                <span class="text text-danger">{{$errors->first('period')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label>Subject</label>
                                <select class="form-control" name="subject"  id="designation">

                                    <option disabled selected>Select subject</option>
                                    @foreach($all_subjects as $subject)
                                        <option value="{{$subject->subject_name}}" @if(old('subject') == $subject->subject_name)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="start_time">Start time</label>
                                <input type="text" name="start_time" value="{{old('start_time')}}"  id="start_time" class="form-control" placeholder="8:00am">
                                <span class="text text-danger">{{$errors->first('start_time')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label for="end_time">End time</label>
                                <input type="text" name="end_time" value="{{old('end_time')}}" id="end_time" class="form-control timepicker" placeholder="8:45am">
                                <span class="text text-danger">{{$errors->first('end_time')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="room_number">Room number</label>
                                <input type="text" name="room_number" value="{{old('room_number')}}" id="room_number" class="form-control" placeholder="Room number">
                                <span class="text text-danger">{{$errors->first('room_number')}}</span>
                            </div>


                            <div class="form-group col-md-2 col-sm-2">
                                <label for="class">Teacher name</label>
                                <select class="form-control" name="teacher_name" id="class">
                                    <option disabled selected>Select teacher</option>
                                    @foreach($all_teacher as $teacher)
                                        <option value="{{$teacher->first_name.' '.$teacher->last_name}}" @if(old('teacher_name') == $teacher->first_name.' '.$teacher->last_name)selected @endif>{{$teacher->first_name.' '.$teacher->last_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('teacher_name')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label>Section (*Optional)</label>
                                <select class="form-control" name="section" id="section">
                                    <option disabled selected>Select section</option>
                                    @foreach($all_section as $section)
                                        <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('section')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label>Shift (*Optional)</label>
                                <select class="form-control" name="shift" id="shift">
                                    <option disabled selected>Select Group</option>
                                    <option value="Day" @if(old('shift') == 'Day')selected @endif>shift</option>
                                    <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('shift')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label>Group (*Optional)</label>
                                <select class="form-control" name="group" id="group">
                                    <option disabled selected>Select Group</option>
                                    <option value="Humanity" @if(old('group') == 'Humanity')selected @endif>Humanity</option>
                                    <option value="Business_studies" @if(old('group') == 'Business_studies')selected @endif>Business studies</option>
                                    <option value="Science" @if(old('group') == 'Science')selected @endif>Science</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('group')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>


                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info  m-r-20">Create class routine</button>
                                    <a class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
