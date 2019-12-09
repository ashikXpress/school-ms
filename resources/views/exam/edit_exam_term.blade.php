@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Exam Term Name</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('update.exam.term',$exam_term->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="exam_term_name">Exam term name</label>
                                <input type="text" name="exam_term_name" value="{{$exam_term->exam_term_name}}" id="exam_term_name" class="form-control" placeholder="Enter exam term name">
                                <span class="text text-danger">{{$errors->first('exam_term_name')}}</span>
                            </div>


                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Update Exam Term</button>
                                    <a href="{{route('exam.term.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
