@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Event Detail</h2>
            </div>
        </div>
        <div class="black-overlay"></div>
    </div>
    <!-- End banner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Event Detail</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Services*-->
    <section id="mt_services" class="light-bg services-section section-inner">
        <div class="container">
            <div class="course-detail">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="post_img">
                            <img src="{{asset('uploads/gallery/'.$event->photo)}}" alt="">
                        </div>
                        <div class="course-tabs">
                            <div class="post_title_eve">
                                <h3>{{$event->title}}: {{$event->date}}</h3>
                                <ul class="list-inline list-unstyled">
                                    <li><i class="ion-ios-person-outline"></i>&nbsp; {{$event->start_time}} - {{$event->end_time}} </li>
                                    <li><i class="ion-ios-calendar-outline"></i>&nbsp;  {{$event->location}}</li>
                                </ul>
                            </div>
                            <div class="eve-content">
                                <div class="over-view">
                                   <p>{{$event->description}}</p>

                                    <div class="event-social">
                                        <h4>Share event : </h4>
                                        <ul class="list-inline social">
                                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="book-seat-now">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="apply-form">
                                            <h4>Please Fill Up The Form</h4>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum </p>
                                            <form action="https://cyclonethemes.com/demo/html/padhai/index.html" method="POST">
                                                <p><input class="form-control" type="text" placeholder="Name"></p>
                                                <p><input class="form-control" type="tel" placeholder="Phone"></p>
                                                <p><input class="form-control" type="email" placeholder="Email"></p>
                                                <p><textarea class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea></p>
                                                <p><input type="submit" value="Apply Now" class="submit"></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="locate-map">
                                            <h4>Location</h4>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d145092.25223378316!2d-73.90911109726638!3d40.697319496210085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24369470a592b%3A0x4109d18b6c5c7b05!2sQueens%2C+NY%2C+USA!5e0!3m2!1sen!2snp!4v1551785935214" width="200" height="425" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--* End Services*-->
@endsection
