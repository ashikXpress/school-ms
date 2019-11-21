@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Create class subject</header>
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
                    <form action="{{route('create.class.subject')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md- col-sm-8">
                                <label for="class">Class name</label>
                                <select class="form-control classname" name="class_name" id="class">
                                    <option disabled selected>Select class</option>
                                    @foreach($class_names as $class_name)
                                        <option value="{{$class_name->class_name}}" @if(old('class_name') == $class_name->class_name)selected @endif>{{$class_name->class_name}}</option>
                                    @endforeach
                                </select>

                                <span class="text text-danger">{{$errors->first('class_name')}}</span>
                            </div>

                            <div class="form-group col-md-8 col-sm-8">
                                <label>Subject (*Required)</label>
                                <select class="form-control" name="subject_name[]" multiple id="designation">

                                    @foreach($class_subjects as $class_subject)
                                        <option value="{{$class_subject->subject_name}}" {{in_array($class_subject->subject_name, old("subject_name") ?: []) ? "selected": ""}} >{{$class_subject->subject_name}}</option>
                                    @endforeach
                                </select>
                                <span class="text text-danger">{{$errors->first('subject_name')}}</span>
                            </div>

                            <div class="form-group col-md-8 col-sm-8 groupshow">
                                <label>Group (*Optional)</label>
                                <select class="form-control" name="group_name" id="group">
                                    <option disabled selected>Select Group</option>
                                    <option value="Humanity" @if(old('group_name') == 'Humanity')selected @endif>Humanity</option>
                                    <option value="Business_studies" @if(old('group_name') == 'Business_studies')selected @endif>Business studies</option>
                                    <option value="Science" @if(old('group_name') == 'Science')selected @endif>Science</option>

                                </select>
                                <span class="text text-danger">{{$errors->first('group_name')}}</span>
                            </div>


                            <div class="form-group col-md-8 col-sm-8">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description"  id="description" rows="3" placeholder="Enter description">{{old('description')}}</textarea>
                                <span class="text text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info btn-lg m-r-20">Create class subject</button>
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
                    <header>All Class subject</header>
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
                                <a href="" id="addRow" class="btn btn-info">
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
                                <div class="col-sm-12 col-md-6 search-form-left-less">
                                    <form action="">
                                        @csrf
                                        <label>Search:<input type="text" name="search" class="form-control form-control-sm" placeholder="Type..." aria-controls="example4">
                                        </label>
                                        <button class="btn btn-info">Search</button>

                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 150px;">Sl</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 150px;">Class name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Subject name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Group name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 61px;"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($class_subjects as $class_subject)
                                            <tr class="gradeX odd" role="row">


                                                <td class="left">{{$loop->iteration}}</td>
                                                <td class="left">{{$class_subject->class_name}}</td>
                                                <td class="left">{{$class_subject->subject_name}}</td>
                                                <td class="left">{{$class_subject->group_name}}</td>

                                                <td>
                                                    <a href="{{route('employee.edit.form',$class_subject->id)}}" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                        Edit
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
                                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing {{$class_subjects->count()}} of {{$counts}} entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    {{$class_subjects->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
