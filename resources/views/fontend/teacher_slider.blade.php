@extends('layouts.fontend_layout')
@section('content')
    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Our Teachers</h2>
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
                <li class="active">Teachers List</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->


    <!--*Team*-->
    <section id="educate-team" class="section-inner">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Our Teachers</h3>
                <h2>Meet our expert teachers</h2>
            </div>
            <div class="row slider-educteam">
                @foreach($teachers as $teacher)
                <div class="col-md-3 col-sm-6 col-xs-12 item">
                    <div class="team_member mar-bottom-30">
                        <figure class="effect-julia">
                            <img src="{{asset('fontend/assets/images/team/rmember-1.jpg')}}" alt="team">
                        </figure>
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.</p>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member_name">
                            <h3>{{$teacher->first_name.' '.$teacher->last_name}}</h3>
                            <span>Language Teacher</span>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-xs-12">
                    <div class="pagination-div pg-services text-center">
                       {{$teachers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Team*-->
@endsection
