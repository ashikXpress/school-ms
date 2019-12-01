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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('admin/assets/custom_date/datepicker.min.css')}}" rel="stylesheet">
   <style>
       span.select2-selection.select2-selection--single{
           font-size: 16px;
           font-weight: 300;
           background-color: #fff;
           border: 1px solid #eceaea;
           border-radius: 5px;
           padding: 10px 25px;
           width: 100%;
           color: #444444;
           font-family: 'Roboto', sans-serif;
           height: 42px;
           box-shadow: none;
       }
       .select2-container--default .select2-selection--single .select2-selection__rendered {

           line-height: 21px;
       }
       .select2-dropdown{
           border: 1px solid #eceaea;
       }

       .select2-container--default .select2-results__option--highlighted[aria-selected]{
           background-color: #ffac00;
       }
       .select2-container .select2-selection--single .select2-selection__rendered {
           padding-left: 0;
       }
       .select2-container--default .select2-search--dropdown .select2-search__field {
           border: 1px solid #eceaea;
       }
       .select2-container--default .select2-selection--single .select2-selection__arrow {

           top: 10px;

       }
       .select2-container--default .select2-search--dropdown .select2-search__field {
           border: 1px solid #eceaea;
       }
       input.select2-search__field:focus{
           color: #ffac00;
       }
       .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
           background-color: #fff;
           opacity: 1;
       }
       .text-danger{
           color: #ffac00;
       }

       section#the-gallery {
           padding-top: 80px;
           padding-bottom: 80px;
       }
       #mt_footer {

           padding-top: 40px;

       }

       a.active {
           color: #ffac00 !important;
       }
   </style>

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
                @if(isset($notices))
                <h4 class="text text-danger">
                    <marquee behavior="" direction="">
                        @foreach($notices as $notice)
                            <a class="active" href=""><span> {{$notice->title.'... | '}} </span></a>
                            @endforeach


                    </marquee>
                </h4>
                @endif
                <div class="top-bar-left pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> Phone: +01-123456789</li>
                        <li><i class="fa fa-envelope"></i> Email: info@sitename.com</li>
                    </ul>
                </div>

                <div class="top-bar-right pull-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-question-circle"></i> Ask a Question</a> </li>
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
                    <li class="{{ Request::is('/') ? 'active' : null }}"><a href="{{route('home')}}">Home</a></li>
                    <li class=""><a href="#">Academic <i class="fa fa-angle-down"></i></a>

                        <ul>
                            <li><a href="{{route('admission.form')}}">Admission</a></li>
                            <li><a href="">Result</a></li>
                            <li><a href="">Fees</a></li>
                            <li><a href="">Notice</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('about-us') ? 'active' : null }}"><a href="{{route('about.us')}}">About</a></li>
                    <li class="{{ Request::is('teacher-slider') ? 'active' : null }}"><a href="{{route('teacher.slider')}}">Teacher</a></li>
                    <li class="{{ Request::is('events') ? 'active' : null }}"><a href="{{route('events')}}">Events</a></li>
                    <li class="{{ Request::is('gallery') ? 'active' : null }}"><a href="{{route('gallery')}}">Gallery</a></li>
                    <li class="{{ Request::is('blog') ? 'active' : null }}"><a href="{{route('blog')}}">Blog</a></li>
                    <li class="{{ Request::is('contact-us') ? 'active' : null }}"><a href="{{route('contact.us')}}">Contact</a></li>




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
<!-- map Jquery --><script src="{{asset('fontend/assets/js/custom-map.js')}}"></script>

<!-- google map Jquery -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4JwWo5VPt9WyNp3Ne2uc2FMGEePHpqJ8&amp;callback=initMap" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="{{asset('admin/assets/custom_date/datepicker.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#class').select2();

        $( "#dpicker1" ).datepicker({
            format: 'dd-mm-yyyy',
            autoHide:true,
            date:'Date',
        });
        $( "#dpicker2" ).datepicker({
            format: 'dd-mm-yyyy',
            autoHide:true,
            date:'Date',
        });
    });
</script>
</body>

</html>
