@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Subject</header>

                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('update.subject',$subject->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="subject_name">Subject name</label>
                                <input type="text" class="form-control" name="subject_name" value="{{$subject->subject_name}}" id="subject_name" placeholder="Enter subject name">
                                <span class="text text-danger">{{$errors->first('subject_name')}}</span>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">
                                <label for="subject_code">subject code</label>
                                <input type="number" name="subject_code" value="{{$subject->subject_code}}" id="subject_code" class="form-control" placeholder="Enter subject code">
                                <span class="text text-danger">{{$errors->first('subject_code')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Update Subject</button>
                                    <a href="{{route('subject.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
