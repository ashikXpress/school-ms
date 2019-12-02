@extends('layouts.fontend_layout')
@section('content')
    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Events</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Event</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Events*-->
    <section class="edu-events section-inner">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Upcomming Events</h3>
                <h2>Reserve your seats now</h2>
            </div>
            <div class="row">
                @foreach($events as $event)
                <div class="col-md-6 col-sm-12">
                    <div class="event-item">
                        <div class="event-date text-center text-uppercase">
                            <h4 class="mar-0">10 <span>Jan</span></h4>
                        </div>
                        <div class="event-details">
                            <h3 class="mar-bottom-10"><a href="{{route('event.details',$event->id)}}">{{$event->title}}</a></h3>
                            <ul class="event-time">
                                <li><i class="fa fa-clock-o"></i>{{$event->start_time}} - {{$event->end_time}}</li>
                                <li><i class="fa fa-map-marker"></i>{{$event->location}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="col-xs-12">
                    <div class="pagination-div pg-services text-center">
                        {{$events->links()}}

                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </section>
    <!--* End Events*-->
@endsection
