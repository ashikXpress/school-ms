@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create examination routine</header>
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
                    <form action="{{route('create.exam.routine')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="class">Class name</label>
                                <select class="form-control classname" name="class" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($classes as $class)
                                        <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label>Subject</label>
                                <select class="form-control" name="subject"  id="designation">

                                    <option disabled selected>Select subject</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}" @if(old('subject') == $subject->subject_name)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label for="subject">Exam term name</label>
                                <select class="form-control" name="exam_term_name" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($terms as $term)
                                        <option value="{{$term->id}}" @if(old('exam_term_name') == $term->id)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term_name')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="dpicker2">To date</label>
                                <input id="dpicker2" readonly class="form-control" name="exam_date"   placeholder="Exam date" size="44" type="text">
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

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="class">Guard name</label>
                                <select class="form-control" multiple name="guards_name[]" id="class">

                                    @foreach($all_teacher as $teacher)
                                        <option value="{{$teacher->id.' '.$teacher->last_name}}" @if(old('guards_name') == $teacher->first_name.' '.$teacher->last_name)selected @endif>{{$teacher->first_name.' '.$teacher->last_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('guards_name')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label>Section (*Optional)</label>
                                <select class="form-control" name="section" id="section">
                                    <option disabled selected>Select section</option>
                                    @foreach($sections as $section)
                                        <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('section')}}</span>
                            </div>
                            <div class="form-group col-md-2 col-sm-2">
                                <label for="shift">Shift (*Optional)</label>
                                <select class="form-control" name="shift" id="shift">
                                    <option disabled selected>Select Group</option>
                                    <option value="Day" @if(old('shift') == 'Day')selected @endif>shift</option>
                                    <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('shift')}}</span>
                            </div>

                            <div class="form-group col-md-2 col-sm-2">
                                <label for="group">Group (*Optional)</label>
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
                                    <button type="submit" class="btn btn-info  m-r-20">Create exam routine</button>
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
