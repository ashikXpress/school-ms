@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Students Examination Marks</header>

                </div>
                <div class="card-body " >
                    <form class="row" action="">

                        <div class="form-group col-md-3 col-sm-3">
                            <label for="class">Student</label>
                            <select class="form-control" name="student" id="class" required>
                                <option disabled selected>Select</option>
                                @foreach($students as $student)
                                    <option value="{{$student->id_number}}">{{$student->id_number.' ('.$student->first_name.' '.$student->last_name.')'}}</option>
                                @endforeach
                            </select>
                            <span class="text text-danger">{{$errors->first('subject')}}</span>
                        </div>


                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>

                    </form>
                    <hr>

                    @if(isset($subjects))
                    <form action="{{route('insert.student.marks')}}" method="post">
                        @csrf
                    <div class="col-md-12">
                        <div class="row">
                            <input type="hidden" name="student_id" value="{{$std->id}}">
                            <div class="col-md-2">Name: {{$std->first_name.' '.$std->last_name}}</div>
                            <div class="col-md-2">Class: {{$std->class}}</div>
                            <div class="col-md-2">Id number: {{$std->id_number}}</div>
                            <div class="form-group col-md-1">
                                <label for="subject">Exam term</label>

                            </div>
                            <div class="form-group col-md-2">
                                <select class="form-control" name="exam_term" id="class">
                                    <option disabled selected>Select</option>
                                    @foreach($terms as $term)
                                        <option value="{{$term->exam_term_name}}" @if(old('exam_term') == $term->exam_term_name)selected @endif>{{$term->exam_term_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('exam_term')}}</span>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="academic_year">Session</label>

                            </div>
                            <div class="form-group col-md-2 col-sm-">

                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        @foreach($subjects as $key=>$subject)
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="marks[{{$key}}]">{{$loop->iteration.'. '}}{{strtoupper(str_replace('_', ' ', $subject->subject_name))}}{{$subject->subject_code}}</label>

                                </div>
                                <div class="form-group col-md-3">
                                    <input type="number" name="marks[{{$key}}]" value="{{ old('marks.'.$key) }}" id="marks[{{$key}}]" class="form-control" placeholder="Marks">
                                    <input type="hidden" name="subjects[]" value="{{$subject->subject_name}}">
                                </div>


                            </div>
                        </div>
                        @endforeach

                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info btn-lg m-r-20">Insert marks</button>
                                <a class="btn btn-default btn-lg">Cancel</a>
                            </div>

                    </div>

                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
