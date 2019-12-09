@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Section</header>
                </div>
                <div class="card-body " id="bar-parent2">
                    <form action="{{route('update.section',$section->id)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-8 col-sm-8">
                                <label for="section_name">Section name</label>
                                <input type="text" name="section_name" value="{{$section->section_name}}" id="section_name" class="form-control" placeholder="Enter section name">
                                <span class="text text-danger">{{$errors->first('section_name')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description">{{$section->description}}</textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Update Section</button>
                                    <a href="{{route('section.list')}}" class="btn btn-default btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
