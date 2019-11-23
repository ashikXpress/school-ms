@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create syllabus</header>
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
                    <form action="{{route('create.syllabus')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="class">Class name</label>
                                <select class="form-control" name="class" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}" @if(old('class') == $class->id)selected @endif>{{$class->class_name}}</option>
                                @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Subject name</label>
                                <select class="form-control" name="subject" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->id}}" @if(old('subject') == $subject->id)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Exam term name</label>
                                <select class="form-control" name="exam_term_name" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($terms as $term)
                                        <option value="{{$term->id}}" @if(old('exam_term_name') == $term->id)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term_name')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>



                            <div class="form-group col-md-12 col-sm-12">
                                <label for="summernote">Description</label>

                                <textarea class="form-control" name="description" id="summernote" placeholder="Enter description" cols="30" rows="10">
                                {{old('description')}}
                                </textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create syllabus</button>
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
