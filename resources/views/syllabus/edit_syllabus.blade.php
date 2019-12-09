@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Syllabus</header>

                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('update.syllabus',$syllabus->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="class">Class name</label>
                                <select class="form-control" name="class" id="class">
                                 <option value="{{$syllabus->class}}" selected>{{$syllabus->class}}</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('class')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Subject name</label>
                                <select class="form-control" name="subject" id="class">
                                    <option value="{{$syllabus->subject}}" selected>{{$syllabus->subject}}</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{$subject->subject_name}}" @if(old('subject') == $subject->id)selected @endif>{{$subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject')}}</span>
                            </div>
                            <div class="form-group col-md-3 col-sm-3">
                                <label for="subject">Exam term name</label>
                                <select class="form-control" name="exam_term_name" id="class">
                                    <option value="{{$syllabus->examination_term}}" selected>{{$syllabus->examination_term}}</option>
                                    @foreach($exam_terms as $term)
                                        <option value="{{$term->exam_term_name}}" @if(old('exam_term_name') == $term->exam_term_name)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term_name')}}</span>
                            </div>

                            <div class="form-group col-md-3 col-sm-3">
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{$syllabus->academic_year}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>



                            <div class="form-group col-md-12 col-sm-12">
                                <label for="summernote">Description</label>

                                <textarea class="form-control" name="description" id="summernote" placeholder="Enter description" cols="30" rows="10">
                                {{$syllabus->description}}
                                </textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
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
