@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Student attendance</header>
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
                    <form action="{{route('student.attendance')}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-3 col-sm-3">
                                <label>Student name</label>
                                <select class="form-control" name="student_name" id="studentattendanceselected">
                                    <option disabled selected>Select student</option>
                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(old('student_name') == $student->id)selected @endif>{{$student->first_name.' '.$student->last_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('student_name')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label>Teacher name</label>
                                <select class="form-control" name="teacher_name" id="studentattendanceselected">
                                    <option disabled selected>Select teacher</option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}" @if(old('teacher_name') == $teacher->id)selected @endif>{{$teacher->first_name.' '.$teacher->last_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('teacher_name')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="dp1">Attend date</label>
                                <div class="input-append date" id="dp1">
                                    <input class="form-control formDatePicker" name="attend_date" value="{{old('attend_date')}}"  placeholder="Enter attend date" size="44" type="text" aria-invalid="false">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                                    <span class="text text-danger">{{$errors->first('attend_date')}}</span>
                                </div>

                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label>status</label>
                                <div class="row col-md-12">
                                    <div class="radio p-0 col-md-6">
                                        <input type="radio" name="status" id="optionsRadios1" value="0" {{ old('status') == '0' ? 'checked' : ''}}>
                                        <label for="optionsRadios1">Present</label>
                                    </div>
                                    <div class="radio p-0 col-md-6">
                                        <input type="radio" name="status"  id="optionsRadios2" value="1" {{ old('status') == '1' ? 'checked' : ''}}>
                                        <label for="optionsRadios2">Absent</label>
                                    </div>
                                </div>
                                <span class="text text-danger">{{$errors->first('status')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description"  id="description" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Check in</button>
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
