@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create Designation</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('create.designation')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="designation_name">Designation name</label>
                                <input type="text" name="designation_name" value="{{old('designation_name')}}" id="designation_name" class="form-control" placeholder="Enter designation name">
                                <span class="text text-danger">{{$errors->first('designation_name')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create designation</button>
                                    <a href="{{route('designation.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
