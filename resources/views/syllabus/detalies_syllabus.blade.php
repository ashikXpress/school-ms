@extends('layouts.master_layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="card col-md-12">
                        <div class="card-topline-aqua">
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">Academic year -{{$syllabus->academic_year}}</div>
                                <p> <strong>Class: {{$syllabus->className->class_name}}</strong> </p>
                                <p><strong>Subject: {{$syllabus->subject->subject_name}}</strong></p>
                                <p><strong>Examination: {{$syllabus->examTerm->exam_term_name}}</strong></p>
                                <hr>
                            </div>
                        </div>
                        <div class="white-box">
                            <!-- Nav tabs -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active fontawesome-demo">
                                    <div id="biography">


                                        <article>{!! html_entity_decode($syllabus->description) !!}</article>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>

@endsection
