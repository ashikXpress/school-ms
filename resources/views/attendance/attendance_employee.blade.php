@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Employee attendance</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body " >
                    <form class="row" action="">
                        <div class="form-group col-md-3 col-sm-3">
                            <label for="designation">Employee</label>
                            <select class="form-control" name="designation" id="designation">
                                <option disabled selected>Select employee</option>
                                <option value="all">All</option>
                                @foreach($designations as $designation)
                                    <option value="{{$designation->designation_name}}" @if(old('designation') == $designation->designation_name)selected @endif>{{$designation->designation_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>

                    </form>

                    <form class="table-scrollable" action="{{route('employee.attendance')}}" method="post">
                        @csrf
                        <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 200px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 150px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 120px;">Designation</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 100px;">Contact number</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($employee_search_lists))
                                            @foreach($employee_search_lists as $key=>$employee_list)

                                                <tr class="gradeX odd" role="row">
                                                    <td>
                                                        <label for="optionsRadios{{$employee_list->id}}">Present </label>
                                                        <input type="radio" name="status[{{$key}}]" id="optionsRadios{{$employee_list->id}}" checked value="1" >
                                                        <label for="optionsRadios{{$employee_list->id}}"> Absent </label>
                                                        <input type="radio" name="status[{{$key}}]"  id="optionsRadios{{$employee_list->id}}" value="0" >
                                                    </td>
                                                    <input type="hidden" name="employee_id[]" value="{{$employee_list->id}}">

                                                    <td><a href="">{{$employee_list->first_name.' '.$employee_list->last_name}}</a></td>
                                                    <td>{{$employee_list->designation}}</td>
                                                    <td>{{$employee_list->contact_number}}</td>


                                                </tr>
                                            @endforeach

                                        @endif

                                        </tbody>

                                    </table>
                                    @if(isset($attendance_check))
                                        <h3 class="text text-danger">{{$attendance_check}}</h3>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 ">
                                    @if(isset($employee_search_lists))
                                        <p><strong>Total employee is {{ $employee_search_lists->count()}}</strong></p>
                                        <button type="submit" class="btn btn-lg btn-info present-btn">Present</button>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection
