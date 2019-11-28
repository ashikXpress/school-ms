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
                    <h3>Welcome To Padhai</h3>
                    <h1>Explore the World of Our Graduates</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
                </div><!-- /Left Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{asset('fontend/assets/images/education/slide-2.jpg')}}" alt="slider_02" />
                <!-- Right Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                    <h3>Welcome To Padhai</h3>
                    <h1>Better education for a better world</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
                </div><!-- /Right Slide Text Layer -->
            </div><!-- /item -->
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{asset('fontend/assets/images/education/slide-4.jpg')}}" alt="slider_04" />
                <!-- Center Slide Text Layer -->
                <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                    <h3>Welcome To Padhai</h3>
                    <h1>Exceptional People, Exceptional Care</h1>
                    <a class="mt_btn_white-bor" href="#">Read More</a>
                    <a class="mt_btn_yellow" href="#">Contact Us</a>
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
                                <h3>About Padhai</h3>
                                <h2 class="mar-0">Know more about Padhai</h2>
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

    <!-- Find Courses -->
    <section class="selected-course">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="find-course">
                        <h3>Find your course</h3>
                        <p>Fill in below form to find your courses</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="usr" placeholder="Course Name">
                            </div>
                            <div class="form-group">
                                <select id="sel1">
                                    <option>Category</option>
                                    <option>Computer</option>
                                    <option>Science</option>
                                    <option>History</option>
                                    <option>Economics</option>
                                </select>
                            </div>
                            <button type="submit" class="mt_btn_yellow">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="all-courses">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-male"></i>
                                    <p>Socioligy</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-suitcase"></i>
                                    <p>Business</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-code"></i>
                                    <p>Web Dev</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item mar-bottom-30">
                                    <i class="fa fa-flask"></i>
                                    <p>Science</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-money"></i>
                                    <p>Ecomomics</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-gg"></i>
                                    <p>Biology</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-desktop"></i>
                                    <p>Computing</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="courses-item">
                                    <i class="fa fa-mouse-pointer"></i>
                                    <p>Web Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Find Courses -->

    <!--*Features-one*-->
    <section class="features-one">
        <div class="container">
            <div class="inner-heading">
                <h3>Featured courses</h3>
                <h2>Various courses to choose from</h2>
            </div>
            <div class="row  slider slider-ft-course">
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="{{asset('fontend/assets/images/education/ft-1.jpg')}}" alt="">
                            <div class="th-name">
                                <img src="{{asset('fontend/assets/images/blog/cmnt-1.jpg')}}" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="{{asset('fontend/assets/images/education/ft-2.jpg')}}" alt="">
                            <div class="th-name">
                                <img src="{{asset('fontend/assets/images/blog/cmnt-2.jpg')}}" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="{{asset('fontend/assets/images/education/ft-3.jpg')}}" alt="">
                            <div class="th-name">
                                <img src="{{asset('fontend/assets/images/blog/cmnt-3.jpg')}}" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="{{asset('fontend/assets/images/education/ft-4.jpg')}}" alt="">
                            <div class="th-name">
                                <img src="{{asset('fontend/assets/images/blog/cmnt-1.jpg')}}" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="{{asset('fontend/assets/images/education/ft-1.jpg')}}" alt="">
                            <div class="th-name">
                                <img src="{{asset('fontend/assets/images/blog/cmnt-1.jpg')}}" alt="">
                                <h5>Mark Ronson</h5>
                            </div>
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="courses-detail.html">View Detail</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span>(20 Reviws)</span>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <a href="#"><h3>Economy from start for beginner</h3></a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span>$90</span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-user"></i><span>31</span></a></li>
                                        <li><a href="#" tabindex="-1"><i class="fa fa-heart"></i><span>10</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </section>
    <!--*EndFeatures-one*-->

    <!--* Fun And Facts*-->
    <section id="mt_fun">
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

    <!--Education Event-->
    <section class="edu-events">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Upcomming Events</h3>
                <h2>Reserve your seats now</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="event-left">
                        <img src="{{asset('fontend/assets/images/places/01.jpg')}}" alt="">
                        <div class="event-donation">
                            <h2>Donation helps us</h2>
                            <p>The Campaign for the Padhai University is the <strong>largest fundraising campaign in history</strong>. With a historic $1 billion goal, the campaign is expanding U of T’s global leadership capacity.World Largest books and library center is here where you can study the latest trends of the education</p>
                            <a href="#" class="mt_btn_yellow">Become a Donor</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="event-main">
                        <h2>Upcoming Events</h2>
                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">10 <span>Jan</span></h4>
                            </div>
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Reunion Event : Padhai’s Alumni Golf Tour</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">14 <span>Feb</span></h4>
                            </div>
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Padhai’s Alumni Hot Air Ballon Trip in Turkey</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date text-center text-uppercase">
                                <h4 class="mar-0">21 <span>Mar</span></h4>
                            </div>
                            <div class="event-details">
                                <h3 class="mar-bottom-10"><a href="#">Fintech & Key Investment Conference</a></h3>
                                <ul class="event-time">
                                    <li><i class="fa fa-clock-o"></i>11:00 AM - 3:00 PM</li>
                                    <li><i class="fa fa-map-marker"></i>Royal National Park, Sydney</li>
                                </ul>
                            </div>
                        </div>

                        <a href="mt_btn_yellow.html">View All Events <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!--End Education Event-->

    <section id="mt_get_started" class="front-get">
        <div class="container">
            <div class="start-theme">
                <div class="started-rg">
                    <div class="watch_content">
                        <h2 class="white">GET STARTED TODAY</h2>
                        <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                        <a href="{{route('admission')}}" class="mt_btn_yellow">Apply Admission</a>
                    </div>
                </div>
                <div class="get_stt_img">
                    <img src="{{asset('fontend/assets/images/education/student-01.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--*Team*-->
    <section id="educate-team">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Our Teachers</h3>
                <h2>Meet our expert teachers</h2>
            </div>
            <div class="row edu_team_slider slider-educteam">
                @foreach($teachers as $teacher)
                <div class="col-md-4 col-sm-6 col-xs-12 item">
                    <div class="team_member">
                        <figure class="effect-julia">
                            <img src="{{asset($teacher->photo)}}" alt="team">
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
                        </figure>
                        <div class="member_name">
                            <h3>{{$teacher->first_name.' '.$teacher->last_name}}</h3>
                            <span>Language Teacher</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--* End Team*-->

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

    <!--* Blog*-->
    <section id="mt_blog" class="light-bg">
        <div class="container">
            <div class="blog_post_sec blog_post_inner">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-a">
                        <!-- section title -->
                        <div class="inner-heading">
                            <h3>Our Blog</h3>
                            <h2>Follow our latest news</h2>
                        </div>
                        <div class="blog-post_wrapper front-wrapper">
                            <div class="blog-post-image">
                                <div class="clearfix">
                                    <div class="img detail-im">
                                        <img src="{{asset('fontend/assets/images/blog-listing/blog_02.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail_container">
                                <div class="post-content">
                                    <div class="post-date">
                                        <p>August 2019</p>
                                    </div>
                                    <h3 class="post-title entry-title">
                                        <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                    </h3>
                                    <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                    <div class="post_bottom">
                                        <div class="bottom_list user_info_base">
                                            <img src="{{asset('fontend/assets/images/blog/cmnt-2.jpg')}}" alt="">
                                            <p>John Wakson</p>
                                        </div>
                                        <div class="bottom_list user_post_cmt">
                                            <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                Comments (5)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-b">
                        <div class="blog-post_wrapper front-wrapper">
                            <div class="blog-post-image">
                                <div class="clearfix">
                                    <div class="img detail-im">
                                        <img src="{{asset('fontend/assets/images/blog-listing/blog_04.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail_container">
                                <div class="post-content">
                                    <div class="post-date">
                                        <p>August 2019</p>
                                    </div>
                                    <h3 class="post-title entry-title">
                                        <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                    </h3>
                                    <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                    <div class="post_bottom">
                                        <div class="bottom_list user_info_base">
                                            <img src="{{asset('fontend/assets/images/blog/cmnt-2.jpg')}}" alt="">
                                            <p>John Wakson</p>
                                        </div>
                                        <div class="bottom_list user_post_cmt">
                                            <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                Comments (5)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post_wrapper front-wrapper bl_small_img">
                            <div class="blog-post-image post-img-only">
                                <div class="clearfix">
                                    <div class="img">
                                        <img src="{{asset('fontend/assets/images/blog-listing/blog_03.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                        <div class="on-img-info">
                                            <h3><a href="#">Our Students</a></h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item-c">
                        <div class="post-detail_container detail-single">
                            <div class="post-content">
                                <div class="post-date">
                                    <p>August 2019</p>
                                </div>
                                <h3 class="post-title entry-title">
                                    <a href="blog-details.html">Beginner Guideline of UI/UX</a>
                                </h3>
                                <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae. </p>
                                <div class="post_bottom">
                                    <div class="bottom_list user_info_base">
                                        <img src="{{asset('fontend/assets/images/blog/cmnt-2.jpg')}}" alt="">
                                        <p>John Wakson</p>
                                    </div>
                                    <div class="bottom_list user_post_cmt">
                                        <a href="#"><i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                            Comments (5)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post_wrapper front-wrapper blog_full_image">
                            <div class="blog-post-image post-img-only">
                                <div class="clearfix">
                                    <div class="img">
                                        <img src="{{asset('fontend/assets/images/blog-listing/bl-01.jpg')}}" alt="image" class="img-responsive center-block post_img" />
                                        <div class="on-img-info">
                                            <h3><a href="#">Course Registration</a></h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 22rd April, 2019&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments (10)</a>
                                                </li>
                                            </ul>
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
    <!--* End Blog*-->

    <!-- l-instructor -->
    <section id="l-instructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="widget-cta">
                        <div class="item">
                            <h2 class="widget-title">
                                <span class="white">Become an Instructor</span>
                            </h2>
                            <div class="description">
                                <p class="white">Teach what you love. Edumy gives you the tools to create an<br>online course.</p>
                            </div>
                        </div>
                        <div class="action">
                            <a class="mt_btn_yellow" href="#">Start Teaching</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="widget-cta cta-style1">
                        <div class="item">
                            <h2 class="widget-title">
                                <span class="white">Dove School For Business</span>
                            </h2>
                            <div class="description">
                                <p class="white">Get unlimited access to 2,500 of Udemy’s top courses for <br>
                                    your team. </p>
                            </div>
                        </div>
                        <div class="action">
                            <a class="mt_btn_white-bor" href="#">Start Teaching</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End l-instructor -->

    <!-- Gallery -->
    <section id="the-gallery" class="wide-gallery">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Gallery</h3>
                <h2>See and feel it</h2>
            </div>
            <div class="row">
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('fontend/assets/images/gallery/gl-02.jpg')}}" title="">
                            <img src="{{asset('fontend/assets/images/gallery/gl-02.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="{{asset('fontend/assets/images/gallery/gl-01.jpg')}}" title="">
                            <img src="{{asset('fontend/assets/images/gallery/gl-01.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('fontend/assets/images/gallery/gl-s1.jpg')}}" title="">
                            <img src="{{asset('fontend/assets/images/gallery/gl-s1.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('fontend/assets/images/gallery/gl-03.jpg')}}" title="">
                            <img src="{{asset('fontend/assets/images/gallery/gl-03.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                    <div class="item port-popup">
                        <a href="{{asset('fontend/assets/images/gallery/gl-04.jpg')}}" title="">
                            <img src="{{asset('fontend/assets/images/gallery/gl-04.jpg')}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 mix">
                    <div class="last-item-g">
                        <div class="item port-popup">
                            <a href="{{asset('fontend/assets/images/gallery/gl-c1.jpg')}}" title="">
                                <img src="{{asset('fontend/assets/images/gallery/gl-c1.jpg')}}" alt="">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery -->


@endsection
