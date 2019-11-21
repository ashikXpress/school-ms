@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>Show Class routine</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body " >

                    <form class="row" action="">


                        <div class="form-group col-md-2 col-sm-2">
                            <label for="class">Day</label>
                            <select class="form-control" name="day" id="class">
                                <option disabled selected>Select day</option>

                                <option value="Saturday" @if(old('day') == 'Saturday')selected @endif>Saturday</option>
                                <option value="Sunday" @if(old('day') == 'Sunday')selected @endif>Sunday</option>
                                <option value="Monday" @if(old('day') == 'Monday')selected @endif>Monday</option>
                                <option value="Tuesday" @if(old('day') == 'Tuesday')selected @endif>Tuesday</option>
                                <option value="Wednesday" @if(old('day') == 'Wednesday')selected @endif>Wednesday</option>
                                <option value="Thursday" @if(old('day') == 'Thursday')selected @endif>Thursday</option>
                                <option value="Friday" @if(old('day') == 'Friday')selected @endif>Friday</option>
                            </select>

                            <span class="text text-danger">{{$errors->first('day')}}</span>
                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="class">Select class</label>
                            <select class="form-control" name="class" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->class_name}}" @if(old('class') == $class->class_name)selected @endif>{{$class->class_name}}</option>
                                @endforeach
                            </select>
                            <span class="text text-danger">{{$errors->first('class')}}</span>
                        </div>


                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>

                    </form>
                    <div class="table-scrollable">
                        @csrf
                        <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 90px;">Day</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 30px;">Period</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 85px;">Class</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 80px;">Subject</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 50px;">Section</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Shift</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Group</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 150px;">Teacher</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 110px;">Room no</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 85px;">Time</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 130px;">Action</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($all_class_routine))

                                                @foreach($all_class_routine as $class_routine)
                                                <tr class="gradeX odd" role="row">
                                                    <td class="left">{{$class_routine->day}}</td>
                                                    <td class="left">{{$class_routine->period}}</td>
                                                    <td class="left">{{$class_routine->class}}</td>
                                                    <td class="left">{{$class_routine->subject}}</td>
                                                    <td class="left">{{$class_routine->section}}</td>
                                                    <td class="left">{{$class_routine->shift}}</td>
                                                    <td class="left">{{$class_routine->group}}</td>
                                                    <td class="left">{{$class_routine->teacher_name}}</td>
                                                    <td class="left">{{$class_routine->room_number}}</td>
                                                    <td class="left">{{$class_routine->start_time.' to '.$class_routine->end_time}}</td>
                                                    <td>
                                                        <a href="" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                            Edit
                                                        </a>
                                                        <button class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>
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


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


@endsection
