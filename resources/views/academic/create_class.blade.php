@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create Class</header>

                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('create.class')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="class_name">Class name</label>
                                <input type="text" name="class_name" value="{{old('class_name')}}" id="class_name" class="form-control" placeholder="Enter class name">
                                <span class="text text-danger">{{$errors->first('class_name')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" value="{{old('description')}}" id="description" rows="3" placeholder="Enter description"></textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create class</button>
                                    <a href="{{route('class.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection
