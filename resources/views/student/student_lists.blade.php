@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>All student list</header>
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
                                <a href="{{route('student.admission.form')}}" id="addRow" class="btn btn-info">
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
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">First name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Last name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Contact number</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Created by</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Mobile : activate to sort column ascending" style="width: 85px;">Created date</th>
                                           <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 61px;"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($student_lists as $student_list)
                                            <tr class="gradeX odd" role="row">
                                                <td class="left">{{$student_list->id}}</td>
                                                <td>{{$student_list->first_name}}</td>
                                                <td>{{$student_list->last_name}}</td>
                                                <td>{{$student_list->email}}</td>
                                                <td>{{$student_list->contact_number}}</td>
                                                <td class="left">Admin</td>
                                                <td>{{$student_list->created_at}}</td>
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
                                    {{$student_lists->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
