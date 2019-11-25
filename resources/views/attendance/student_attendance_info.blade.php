@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>All students attendance info</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body " >
                    <form class="row" action="">
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="dp1">From date</label>
                            <div class="input-append date" id="dp1">
                                <input class="form-control formDatePicker" name="from_date"  placeholder="From date" size="44" type="text" >
                                <span class="add-on"><i class="fa fa-calendar"></i></span>

                            </div>

                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="dp2">To date</label>
                            <div class="input-append date" id="dp2">
                                <input class="form-control formDatePicker" name="to_date"   placeholder="To date" size="44" type="text">
                                <span class="add-on"><i class="fa fa-calendar"></i></span>

                            </div>

                        </div>

                        <div class="form-group col-md-2 col-sm-2">
                            <label for="class">Class</label>
                            <select class="form-control" name="class" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="shift">Shift</label>
                            <select class="form-control" name="shift" id="shift">
                                <option disabled selected>Select shift</option>
                                <option value="Morning" @if(old('shift') == 'Morning')selected @endif>Morning</option>
                                <option value="Day" @if(old('shift') == 'Day')selected @endif>Day</option>

                            </select>

                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="section">Section</label>
                            <select class="form-control" name="section" id="section">
                                <option disabled selected>Select section</option>
                                @foreach($sections as $section)
                                    <option value="{{$section->section_name}}" @if(old('section') == $section->section_name)selected @endif>{{$section->section_name}}</option>
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
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Class</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Section</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Shift</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Roll</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Id no</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($students_attendance_info))
                                            @foreach($students_attendance_info as  $key=>$attendance_info)

                                                <tr class="gradeX odd" role="row">
                                                    <td>{{$loop->iteration}}</td>
                                                    <td class="left">{{$attendance_info->student->class}}</td>
                                                    <td class="left">{{$attendance_info->student->section}}</td>
                                                    <td class="left">{{$attendance_info->student->shift}}</td>
                                                    <td class="left">{{$attendance_info->student->roll}}</td>
                                                    <td class="left">{{$attendance_info->student->id_number}}</td>
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
                                    @if(isset($students_attendance_info))
                                        <p><strong>Total student is {{ $students_attendance_info->count()}}</strong></p>
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
