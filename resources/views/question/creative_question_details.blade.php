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
                                <div class="profile-usertitle-name">Academic year -{{$question->academic_year}}</div>
                                <p> <strong>Class: {{$question->class}}</strong> </p>
                                <p><strong>Subject: {{$question->subject}}</strong></p>
                                <p><strong>Examination: {{$question->examination_term}}</strong></p>
                                <hr>
                            </div>

                        </div>
                        <div class="white-box" style="color:#000 !important">

                            <div class="tab-content">
                                <div class="tab-pane active fontawesome-demo">
                                    <div id="biography">

                                        <article>{!! html_entity_decode($question->creative_question) !!}</article>
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
