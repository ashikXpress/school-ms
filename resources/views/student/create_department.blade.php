@extends('layouts.master_layout')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-box">
            <div class="card-head">
                <header>Create Department</header>
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
                <form action="{{route('create.department')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-8 col-sm-8">
                            <label for="dept_name">Department name</label>
                            <input type="text" name="dept_name" value="{{old('dept_name')}}" id="dept_name" class="form-control" placeholder="Enter department name">
                            <span class="text text-danger">{{$errors->first('dept_name')}}</span>
                        </div>


                        <div class="form-group col-md-8 col-sm-8">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description"  id="description" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                            <span class="text text-danger">{{$errors->first('description')}}</span>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info btn-lg m-r-20">Create department</button>
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
