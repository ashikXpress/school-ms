@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>All Employee attendance info</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body " >
                    <form class="row" action="">

                        <div class="form-group col-md-3 col-sm-3">
                            <label for="dpicker1">From date</label>

                            <input id="dpicker1" readonly class="form-control" name="from_date"  placeholder="From date" size="44" type="text" required>

                        </div>
                        <div class="form-group col-md-3 col-sm-3">
                            <label for="dpicker2">To date</label>
                            <input id="dpicker2" readonly class="form-control formDatePicker" name="to_date"   placeholder="To date" size="44" type="text" required>

                        </div>



                        <div class="form-group col-md-3 col-sm-3">
                            <label for="class">Employee name</label>
                            <select class="form-control" name="employee_id" id="class">
                                <option disabled selected>Select teacher</option>
                                @foreach($all_employee as $employee)
                                    <option value="{{$employee->id}}">{{$employee->first_name.' '.$employee->last_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>

                    </form>

                    <div class="table-scrollable">

                        <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 10px;">Sl</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Designation</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Attend date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($employees_attendance_info))
                                            @foreach($employees_attendance_info as  $key=>$attendance_info)

                                                <tr class="gradeX odd" role="row">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td class="left">{{$attendance_info->employee->first_name.' '.$attendance_info->employee->last_name}}</td>
                                                    <td class="left">{{$attendance_info->employee->designation}}</td>
                                                    <td class="left">{{$attendance_info->attend_date}}</td>
                                                    <td class="left">
                                                        @if($attendance_info->status==1)
                                                            <span class="label label-sm label-success">Present</span>
                                                        @else
                                                            <span class="label label-sm label-danger">Absent</span>
                                                        @endif

                                                    </td>
                                                    <td class="left">
                                                        ....
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 ">
                                    @if(isset($employees_attendance_info))
                                        <p><strong>Total student is {{ $employees_attendance_info->count()}}</strong></p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

