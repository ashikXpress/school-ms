@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create student diary</header>
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
                    <form action="{{route('create.diary')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="title">Diary title</label>
                                <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control" placeholder="Enter diary title">
                                <span class="text text-danger">{{$errors->first('title')}}</span>
                            </div>
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="section">Select student</label>
                                <select class="form-control" name="student_id" id="section">
                                    <option disabled selected>Search student ID number</option>

                                    @foreach($students as $student)
                                        <option value="{{$student->id}}" @if(old('student_id') == $student->id)selected @endif>{{$student->id_number.'('.$student->first_name.''.$student->last_name.')'}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('student_id')}}</span>
                            </div>

                            <div class="form-group col-md-8 col-sm-8">
                                <label for="diary">Diary</label>
                                <textarea class="form-control" name="diary" value="{{old('diary')}}" id="diary" rows="3" placeholder="Enter diary description"></textarea>
                                <span class="text text-danger">{{$errors->first('diary')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Send diary</button>
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
