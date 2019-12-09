@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create class subject</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('create.class.subject')}}" method="post">
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
                                <label for="academic_year">Academic year</label>
                                <input type="text" name="academic_year" value="{{old('academic_year')}}" id="academic_year" class="form-control yearpicker" placeholder="Academic year">
                                <span class="text text-danger">{{$errors->first('academic_year')}}</span>
                            </div>




                            <div class="form-group col-md-12">
                               @foreach($subjects as $key=>$subject)
                                    <input type="hidden" name="subject_code[{{$key}}]" value="{{$subject->subject_code}}">

                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline col-md-7">

                                <div class="subject">{{$loop->iteration.' . '}} {{$subject->subject_name}} <div class="subject_code">{{$subject->subject_code}}</div></div>
                                   <input type="checkbox" name="subjects[]" class="checkboxes" value="{{strtolower(str_replace(' ', '_', $subject->subject_name))}}">
                                    <span></span>

                               </label>

                               @endforeach

                           </div>


                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info  m-r-20">Create class subject</button>
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
