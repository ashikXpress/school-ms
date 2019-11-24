@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Syllabus list</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-up" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <form class="row">
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="class">Class name</label>
                            <select class="form-control" name="class" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}">{{$class->class_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-3">
                            <label for="subject">Subject name</label>
                            <select class="form-control" name="subject" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="subject">Exam term name</label>
                            <select class="form-control" name="exam_term_name" id="class">
                                <option disabled selected>Select class</option>
                                @foreach($terms as $term)
                                    <option value="{{$term->id}}">{{$term->exam_term_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group col-md-2 col-sm-2">
                            <label for="academic_year">Academic year</label>
                            <input type="text" name="academic_year" id="academic_year" class="form-control yearpicker">
                        </div>
                        <div class="col-md-2 padd-less">

                            <button type="submit" class=" btn btn-info">Search</button>

                        </div>
                    </form>

                    <div class="table-scrollable">
                        <div id="example4_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 search-form-left-less">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle dataTable no-footer" id="example4" role="grid" aria-describedby="example4_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 10px;">Sl</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Class name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Roll No : activate to sort column descending" style="width: 60px;">Subject name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 80px;">Exam term</th>
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 10px;">Academic year</th>
{{--                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Name : activate to sort column ascending" style="width: 220px;">Description</th>--}}
{{--                                            --}}
                                            <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1" colspan="1" aria-label=" Action : activate to sort column ascending" style="width: 150px;"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($syllabus_lists as $syllabus_list)
                                            <tr class="gradeX odd" role="row">
                                                <td class="left">{{$loop->iteration}}</td>
                                                <td class="left">{{$syllabus_list->className->class_name}}</td>
                                                <td class="left">{{$syllabus_list->subject->subject_name}}</td>
                                                <td class="left">{{$syllabus_list->examTerm->exam_term_name}}</td>
                                                <td class="left">{{$syllabus_list->academic_year}}</td>

{{--                                                <td class="left">{!! Illuminate\Support\Str::words(html_entity_decode($syllabus_list->description),5) !!}</td>--}}


                                                <td>
                                                    <a href="{{route('details.syllabus',$syllabus_list->id)}}" class="btn btn-default btn-xs">
                                                        <i class="fa fa-eye-slash"></i>
                                                        view
                                                    </a>
                                                    <a href="{{route('student.edit.form',$syllabus_list->id)}}" class="btn btn-primary btn-xs">
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
                                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing {{$syllabus_lists->count()}} of {{$counts}} entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    {{$syllabus_lists->links()}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
