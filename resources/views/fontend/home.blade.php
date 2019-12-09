@extends('layouts.fontend_layout')
@section('content')


    <!-- Slider -->
    <div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- First Slide -->
            <div class="item active">
                <!-- Slide Background -->
                <img src="{{asset('fontend/assets/images/education/slide-1.jpg')}}" alt="slider_01" />
                <!-- Left Slide Text Layer -->
                <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                    <h3>Welcome To Your School</h3>
                    <h1>Explore the World of Our Education</h1>
                    <a class="mt_btn_white-bor" href="{{route('about.us')}}">Read More</a>
                    <a class="mt_btn_yellow" href="{{route('contact.us')}}">Contact Us</a>
                </div><!-- /Left Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{asset('fontend/assets/images/education/slide-2.jpg')}}" alt="slider_02" />
                <!-- Right Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                    <h3>Welcome To Your School</h3>
                    <h1>Better education for a better world</h1>
                    <a class="mt_btn_white-bor" href="{{route('about.us')}}">Read More</a>
                    <a class="mt_btn_yellow" href="{{route('contact.us')}}">Contact Us</a>
                </div><!-- /Right Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{asset('fontend/assets/images/education/slide-4.jpg')}}" alt="slider_04" />
                <!-- Center Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                    <h3>Welcome To Your School</h3>
                    <h1>Exceptional People, Exceptional Care</h1>
                    <a class="mt_btn_white-bor" href="{{route('about.us')}}">Read More</a>
                    <a class="mt_btn_yellow" href="{{route('contact.us')}}">Contact Us</a>
                </div><!-- /Center Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- End Slider -->

    <!-- About Courses -->
    <div class="edu-courses">
        <div class="container">
            <div class="row panel-grid-banner">
                <div class="col-md-4 col-sm-12">
                    <div class="inner-grid text-center">
                        <div class="text-courses">
                            <i class="fa fa-laptop mar-bottom-20"></i>
                            <h3>Learn Courses Online</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">
                        <div class="text-courses">
                            <i class="fa fa-users mar-bottom-20"></i>
                            <h3>Highly Qualified Teachers</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-grid text-center">
                        <div class="text-coursesa">
                            <i class="fa fa-book mar-bottom-20"></i>
                            <h3>Book Library & Stores</h3>
                        </div>
                        <div class="courses-content">
                            <p class="mar-top-20">Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet</p>
                            <a href="#" class="mt_btn_yellow ">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Courses -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
            <div class="about_services">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-items">
                            <div class="inner-heading">
                                <h3>About Our School</h3>
                                <h2 class="mar-0">Know more about</h2>
                            </div>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh  id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br><br>Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-edu-bg">
                            <img src="{{asset('fontend/assets/images/education/about.png')}}" alt="About">
                        </div>

                    </div>
                    <div class="col-xs-12">
                        <div class="about-form">
                            <div class="col-sm-9">
                                <div class="about-sch-form">
                                    <div class="event-title">
                                        <h2>Apply for Admission</h2>
                                        <h3 class="white">Fall 2019 applications are now open</h3>
                                        <p>We don’t just give students an education and experiences that set them up for success in a career. We help them succeed in their career—to discover a field they’re passionate about and dare to lead it.</p>
                                    </div> <!-- event title -->
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="smt-items mar-top-70">
                                    <a class="mt_btn_yellow" href="{{route('admission')}}">Apply Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->



    <!--* Testimonial*-->
    <section id="const-testi" class="edu-testimonial">
        <div class="container">
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





@endsection
