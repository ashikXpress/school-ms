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

<div class="row">
    <div class="col-md-12">
        <div class="card card-box">
            <div class="card-head">
                <header>All department list</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">
                            <a href="add_professor.html" id="addRow" class="btn btn-info">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group pull-right">
                            <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-print"></i> Print </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-pdf-o"></i> Save as
                                        PDF </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-file-excel-o"></i>
                                        Export to Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="table-scrollable">
                    <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                    <thead>
                                    <tr role="row">

                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 49px;">Sl no</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Department name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Department : activate to sort column ascending" style="width: 91px;">Created by</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Mobile : activate to sort column ascending" style="width: 85px;">Created date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Email : activate to sort column ascending" style="width: 141px;">Update date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Admission Date: activate to sort column ascending" style="width: 116px;">description </th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 61px;"> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($department_lists as $department_list)
                                        <tr class="gradeX odd" role="row">
                                            <td class="left">{{$department_list->id}}</td>
                                            <td>{{$department_list->dept_name}}</td>
                                            <td class="left">Admin</td>
                                            <td>{{$department_list->created_at}}</td>
                                            <td>{{$department_list->updated_at}}</td>
                                            <td class="left">{{$department_list->description}}</td>
                                            <td>
                                                <a href="edit_professor.html" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <button class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o "></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of 18 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                {{$department_lists->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
