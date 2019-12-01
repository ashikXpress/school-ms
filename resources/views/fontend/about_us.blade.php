@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>About Us</h2>
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
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-items">
                            <div class="inner-heading">
                                <h3>About Eduie</h3>
                                <h2 class="mar-0">Know more about eduie</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-edu-bg">
                            <img src="{{asset('fontend/assets/images/education/about.png')}}" alt="About">
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Apply for Scholarship</h2>
                                        <h3 class="white">Fall 2019 applications are now open</h3>
                                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                                    </div> <!-- event title -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="smt-items mar-top-70">
                                    <a class="mt_btn_yellow" href="#">Apply Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <!-- About Courses -->
    <div class="edu-courses about-edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid">
                        <div class="text-courses">
                            <i class="fa fa-laptop"></i>
                            <h3>Learn Courses Online</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid">
                        <div class="text-courses">
                            <i class="fa fa-users"></i>
                            <h3>Highly Qualified Teachers</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="inner-grid">
                        <div class="text-courses">
                            <i class="fa fa-book"></i>
                            <h3>Book Library & Stores</h3>
                        </div>
                        <div class="courses-content">
                            <p>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Courses -->

    <!--* Mission Area*-->
    <section id="mission_main" class="mission-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="mission-content">
                        <div class="inner-heading">
                            <h3>Mission</h3>
                            <h2>Our Mission Vision</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="mission-progress-bar">
                        <div class="progress-wrap">
                            <h5>Known Results</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">95%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Market Research</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">60%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Strategic Consulting</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">90%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Digital Teaching</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">75%</span>
                                </div>

                            </div>
                        </div>

                        <div class="progress-wrap">
                            <h5>Online Reputation</h5>
                            <div class="progress">
                                <div class="progress-bar  color1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                    <span class="bar-width">80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Mission Area*-->

    <!--* Testimonial*-->
    <section id="const-testi" class="edu-testimonial">
        <div class="container wow slideInDown" data-wow-duration="2s">
            <div class="row">
                <div class="col-sm-6">
                    <!-- section title -->
                    <div class="inner-heading">
                        <h3 class="white">Testimonials</h3>
                        <h2 class="white">Hear what our students have to say</h2>
                        <div class="testimonial-abt">
                            <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row slider-eductestimo">
                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="{{asset('fontend/assets/images/team/member-1.jpg')}}" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">Christ Daniel</a>
                                        <span>Biology</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="{{asset('fontend/assets/images/team/member-2.jpg')}}" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">John Wakson</a>
                                        <span>Science & Arts</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                                <div class="testimonial_main">
                                    <div class="client-pic"><img src="{{asset('fontend/assets/images/team/member-3.jpg')}}" alt=""></div>
                                    <h4>
                                        <a href="#" class="text-uppercase">Tim Loran</a>
                                        <span>Web Developer</span>
                                    </h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* EndTestimonial*-->

    <!--* Fun And Facts*-->
    <section id="mt_fun" class="about-pg-mt section-inner">
        <div class="container">
            <div class="mt-statts">
                <div class="inner-heading">
                    <h3>Why choose us</h3>
                    <h2>Various courses to choose from</h2>
                </div>
                <div class="row facts_row">
                    <div class="col-md-8 col-sm-8 col-xs-12 facts_col">
                        <div class="fun-facts-main">
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-trophy"></i>
                                <p class="fun-facts_figure timer" data-to="275" data-speed="3000"></p>
                                <span class="fun-facts_title"> AWARDS </span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-graduation-cap"></i>
                                <p class="fun-facts_figure timer" data-to="3282" data-speed="3000"></p>
                                <span class="fun-facts_title"> STUDENTS </span>
                            </div>
                            <div class="fun-facts_wrapper">
                                <i class="fa fa-university"></i>
                                <p class="fun-facts_figure timer" data-to="120" data-speed="3000"></p>
                                <span class="fun-facts_title"> YEARS OF HISTORY </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="nets-facts">
                            <h2>Take a tour</h2>
                            <div class="pulses">
                                <button type="button" class="play-btn js-video-button" data-video-id='176543782' data-channel="vimeo"><i class="fa fa-play"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Fun And Facts*-->
@endsection
