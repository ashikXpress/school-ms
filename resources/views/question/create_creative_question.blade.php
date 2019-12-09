@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create Creative Question</header>

                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('create.creative.question')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="class">Class name</label>
                                <select class="form-control" name="class" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($classes as $class)
                                        <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Subject name</label>
                                <select class="form-control" name="subject" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}" @if(old('subject') == $subject->subject_name)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Exam term name</label>
                                <select class="form-control" name="exam_term" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($exam_terms as $term)
                                        <option value="{{$term->exam_term_name}}" @if(old('exam_term') == $term->exam_term_name)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>



                            <div class="form-group col-md-12 col-sm-12">
                                <label for="summernote">Creative Question</label>

                                <textarea class="form-control" name="creative_question" id="summernote" placeholder="Enter creative question" cols="30" rows="15">
                                {{old('creative_question')}}
                                </textarea>
                                <span class="text text-danger">{{$errors->first('creative_question')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create syllabus</button>
                                    <a href="{{route('syllabus.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
