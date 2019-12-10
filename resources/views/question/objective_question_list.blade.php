@extends('layouts.master_layout')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Objective Question List</header>
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
                            <select class="form-control" name="class" id="class" required>
                                <option disabled selected>Select class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->class_name}}">{{$class->class_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-3">
                            <label for="subject">Subject name</label>
                            <select class="form-control" name="subject" id="class" required>
                                <option disabled selected>Select class</option>
                                @foreach($subjects as $subject)
                                    <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-2 col-sm-2">
                            <label for="subject">Exam term name</label>
                            <select class="form-control" name="exam_term" id="class" required>
                                <option disabled selected>Select class</option>
                                @foreach($exam_terms as $term)
                                    <option value="{{$term->exam_term_name}}">{{$term->exam_term_name}}</option>
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

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6">

                            <div class="btn-group">
                                <a href="{{route('create.objective.question.form')}}" id="addRow" class="btn btn-info">
                                    Add Objective Question <i class="fa fa-plus"></i>
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
                                            <th>Sl</th>
                                            <th>Objective question name</th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        @if(isset($questions))
                                        <tbody>
                                        @foreach($questions as $question)
                                            <tr class="gradeX odd" role="row">
                                                <td class="left">{{$loop->iteration}}</td>
                                                <td class="left">
                                                    <h4>{{$question->objective_question_name}}</h4>
                                                    @foreach($question->options as $option)
                                                        <span>A. {{$option->option_a}} </span>
                                                        <span>B. {{$option->option_b}} </span>
                                                        <span>C. {{$option->option_c}} </span>
                                                        <span>D. {{$option->option_d}} </span>
                                                    @endforeach
                                                </td>

                                                <td>
                                                    <a href="{{route('edit.syllabus',$question->id)}}" class="btn btn-primary btn-xs">
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
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    @if(isset($questions))
                                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing {{$questions->count()}}</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

{{--    <div class="row">--}}
{{--        <div class="col-md-10 offset-1">--}}
{{--            <div class="panel">--}}
{{--                <header class="panel-heading panel-heading-gray">--}}
{{--                    Panel Title </header>--}}
{{--                <div class="panel-body">--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
