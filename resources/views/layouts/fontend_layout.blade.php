<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Padhai is a creative education html template">

    <title>Padhai - Education HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend/assets/images/favicon.png')}}">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('fontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!--Default CSS-->
    <link href="{{asset('fontend/assets/css/default.css')}}" rel="stylesheet" type="text/css">

    <!--Custom CSS-->
    <link href="{{asset('fontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">

    <!--Plugin CSS-->
    <link href="{{asset('fontend/assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fontend/assets/css/modal-video-min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fontend/assets/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fontend/assets/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">

    <!--Font Icons-->
    <link href="{{asset('fontend/assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('fontend/assets/css/flaticon1.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
</head>

<body>
<!--PRELOADER-->
<div id="preloader">
    <div id="status"></div>
</div>
<!--*Header*-->
<header id="inner-navigation">

    <!-- top bar -->
    <div class="topbar-section">
        <div class="container">
            <div class="topbar-inner">
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                        <li><i class="fa fa-envelope"></i> Email: info@sitename.com</li>
                    </ul>
                </div>

                <div class="top-bar-right pull-right">
                    <ul>
                        <li><a href="faq.html"><i class="fa fa-question-circle"></i> Ask a Question</a> </li>
                        <li><a href="{{route('student.login.form')}}">Log In</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

        <div class="container">

            <div class="logo pull-left">
                <h2><a href="index.html"><!-- <img  class="logo-img" src="{{asset('fontend/assets/images/w-logo.png')}}" alt=""> -->Padhai</a></h2>
            </div>

            <div id="navbar" class="navbar-nav-wrapper pull-right">
                <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="active"><a href="#">Academic <i class="fa fa-angle-down"></i></a>

                        <ul>
                            <li><a href="">Admission</a></li>
                            <li><a href="">Result</a></li>
                            <li><a href="">Fees</a></li>
                            <li><a href="">Notice</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="#">About</a></li>
                    <li class="active"><a href="#">Teacher</a></li>
                    <li class="active"><a href="#">Gallery</a></li>
                    <li class="active"><a href="#">Blog</a></li>
                    <li class="active"><a href="#">Contact</a></li>




                    <li>
                        <div class="header-search">
                            <a href="#" class="search-icon"><i class="fa fa-search"></i></a>
                            <div class="search-box-wrap" style="display: none;">
                                <div class="searchform" role="search">
                                    <form class="search-form" method="get" action="https://cyclonethemes.com/demo/html/padhai/.">
                                        <input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div><!-- .searchform -->
                            </div><!-- .search-box-wrap -->
                        </div>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>

        <div id="slicknav-mobile"></div>
    </nav>
    <!-- navbar end -->
</header>
<!--* End Header*-->

@yield('content')


<!--*Footer*-->
<footer id="mt_footer">
    <div class="container">

        <section id="newsletter">
            <div class="newsletter-inner">
                <div class="row">
                    <div class="col-md-7">
                        <div class="news-content">
                            <h2>Like to become an instructor?</h2>
                            <p class="mar-0">Join thousand of instructors and earn money hassle free! Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiuse.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mailpoet_form">
                            <form target="_self" method="post" action="https://cyclonethemes.com/demo/html/padhai/email" novalidate="">
                                <input type="email" class="mailpoet_text" name="mail" title="Email" placeholder="Please specify a valid email address.">

                                <div class="button"><input type="submit" class="mailpoet_submit" value="Subscribe!"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-main">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="follow_us">

                        <h2><a href="index.html">Padhai</a></h2>

                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="textwidget">
                            <p class="white">PO Box 16122 Grasswood Street West<br>
                                Sydney 5217 Australia</p>
                            <p class="white">Mon-Thu: 9:00 – 21:00<br>
                                Fri: 8:00 – 21:00<br>
                                Sat: 10:00 – 15:00</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12">
                    <div class="footer-right">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_contact_ftr">
                                    <h3>Quick Links</h3>
                                    <ul class="footer-quick-links-4">
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="mt_post_ftr">
                                    <h3>Instagram</h3>
                                    <div class="insta-list">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_01.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_02.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_03.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_04.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_05.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_06.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_07.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_08.jpg')}}" alt="insta">
                                            </div>
                                            <div class="col-sm-4">
                                                <img src="{{asset('fontend/assets/images/insta/insta_09.jpg')}}" alt="insta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt_footer_copy">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copy_txt">
                        <p class="mar-0 white">&copy; Copyright 2018 - Padhai All rights Reserved</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="follow_us pull-right">
                        <ul class="social_icons">
                            <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--* End Footer*-->

<!-- back to top -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="" data-placement="left">
    <span class="fa fa-arrow-up"></span>
</a>

<!--*Scripts*-->

<!-- Latest jquery --><script src="{{asset('fontend/assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- latest Bootstrap --><script src="{{asset('fontend/assets/js/bootstrap.min.js')}}"></script>

<!-- Parallax jquery --><script src="{{asset('fontend/assets/js/jquery.parallax-1.1.3.js')}}"></script>

<!-- Fancybox jquery --><script src="{{asset('fontend/assets/js/jquery.fancybox.pack.js')}}"></script>

<!-- Easing Jquery --><script src="{{asset('fontend/assets/js/jquery.easing.min.js')}}"></script>

<!-- wow animated jquery --><script src="{{asset('fontend/assets/js/wow.min.js')}}"></script>

<!-- Navigation jquery --><script src="{{asset('fontend/assets/js/jquery.nav.js')}}"></script>

<!-- Magnific Popup JS --><script src="{{asset('fontend/assets/js/jquery.magnific-popup.min.js')}}"></script>

<!-- custom image popup Jquery --><script src="{{asset('fontend/assets/js/custom-magnificpopup.js')}}"></script>

<!-- Slick jquery --><script src="{{asset('fontend/assets/js/slick.js')}}"></script>

<!-- Slicknav jquery --><script src="{{asset('fontend/assets/js/slicknav.js')}}"></script>

<!-- custom nav jquery --><script src="{{asset('fontend/assets/js/custom-nav.js')}}"></script>

<!-- Owl Carousel Jquery --><script src="{{asset('fontend/assets/js/owl.carousel.min.js')}}"></script>

<!-- Appear Jquery --><script src="{{asset('fontend/assets/js/jquery.appear.js')}}"></script>

<!-- isotope Jquery --><script src="{{asset('fontend/assets/js/isotope.min.js')}}"></script>

<!-- CountTo Jquery --><script src="{{asset('fontend/assets/js/jquery.countTo.js')}}"></script>

<!-- Popup video Jquery --><script src="{{asset('fontend/assets/js/jquery-modal-video.min.js')}}"></script>

<!-- custom Popup video Jquery --><script src="{{asset('fontend/assets/js/custom-modalvideo.js')}}"></script>

<!-- main default Jquery --><script src="{{asset('fontend/assets/js/main.js')}}"></script>
</body>

</html>
