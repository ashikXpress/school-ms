@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Section List</header>

                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <a href="{{route('create.section')}}" id="addRow" class="btn btn-info">
                                    Add Section <i class="fa fa-plus"></i>
                                </a>
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

                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 49px;">Sl No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Section Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label="Admission Date: activate to sort column ascending" style="width: 116px;">Description </th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 61px;"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sections as $section)
                                            <tr class="gradeX odd" role="row">
                                                <td class="left">{{$loop->iteration}}</td>
                                                <td>{{$section->section_name}}</td>
                                                <td class="left">{{$section->description}}</td>
                                                <td>
                                                    <a href="{{route('edit.section',$section->id)}}" class="btn btn-primary btn-xs">
                                                        Edit<i class="fa fa-pencil"></i>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
