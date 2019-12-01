@extends('layouts.fontend_layout')
@section('content')
    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Blog</h2>
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

                <li class="active">Blog</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Blog div Sec*-->
    <section id="blog_main_sec" class="grid-view section-inner">
        <div class="container">
            <div class="row">
                <!--*Blog Content Sec*-->
                <div class="col-md-8 col-sm-12">

                    <div class="row blog_post_sec">
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_09.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact </a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(3)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_08.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_07.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(5)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_01.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact </a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(3)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_04.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_02.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(5)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_09.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact </a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(3)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_03.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_06.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(5)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_01.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact </a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(3)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_04.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(2)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 grid-item">
                            <div class="blog-post_wrapper">
                                <div class="blog-post-inner_wrapper">
                                    <div class="blog-post-image">
                                        <div class="clearfix">
                                            <div class="img">
                                                <img src="{{asset('fontend/assets/images/blog-listing/blog_02.jpg')}}" alt="image" class="img-responsive center-block post_img" /> </div>
                                        </div>
                                    </div>
                                    <div class="post-detail_container">
                                        <div class="post-content">
                                            <h3 class="post-title entry-title">
                                                <a href="blog-details.html">It is a long established fact</a>
                                            </h3>
                                            <ul class="list-unstyled list-inline post-metadata">
                                                <li>
                                                    <i class="ion-ios-stopwatch-outline"></i> 3rd March, 2018&nbsp;&nbsp;| </li>
                                                <li>
                                                    <i class="ion-ios-chatbubble-outline"></i>&nbsp;
                                                    <a href="#">Comments(5)</a>
                                                </li>
                                            </ul>
                                            <p class="post-excerpt"> Sed ut perspiciatis unde omnis iste natus erro sit voluiptatem accusantium doloremque ips totam quae ab illo inventore. </p>
                                            <div class="view_detail text-center">
                                                <a href="blog-details.html" class="mt_btn_yellow">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"><!-- pagination -->
                        <div class="col-md-12">
                            <div class="pagination-div text-center">
                                <ul class="pagination">
                                    <li class="prev">
                                        <a href="#"><i class="fa fa-angle-double-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">...</a>
                                    </li>
                                    <li>
                                        <a href="#">10</a>
                                    </li>
                                    <li class="next">
                                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End pagination -->
                </div>
                <!--* End Blog Content Sec*-->

                <!--* Blog Sidebar*-->
                <aside class="col-md-4 col-sm-12">
                    <div class="widget"><!-- widget list -->
                        <h3 class="blog_heading_border"> Search </h3>
                        <form class="search-form" role="search" action="http://markupthemex.com/" method="post">
                            <input id="sidebar-search" placeholder="Search" type="text" />
                        </form>
                    </div><!-- End widget list -->

                    <div class="widget widget_recent_entries"><!-- widget list -->
                        <h3 class="blog_heading_border"> Recent Posts </h3>
                        <ul>
                            <li>
                                <img src="{{asset('fontend/assets/images/blog/r-post-1.jpg')}}" alt="image" />
                                <h4>
                                    <a href="blog-details.html">Quis nostrud exercitation ullamco laboris nisi</a>
                                </h4>
                                <p>Mon, 04-09-2016 |
                                    <span> Comment (2)</span>
                                </p>
                            </li>
                            <li>
                                <img src="{{asset('fontend/assets/images/blog/r-post-2.jpg')}}" alt="image" />
                                <h4>
                                    <a href="blog-details.html">Quis nostrud exercitation ullamco laboris nisi</a>
                                </h4>
                                <p>Fri, 06-07-2016 |
                                    <span> Comment (8)</span>
                                </p>
                            </li>
                            <li>
                                <img src="{{asset('fontend/assets/images/blog/r-post-3.jpg')}}" alt="image" />
                                <h4>
                                    <a href="blog-details.html">Quis nostrud exercitation ullamco laboris nisi</a>
                                </h4>
                                <p>Thu, 08-08-2016 |
                                    <span> No Comment</span>
                                </p>
                            </li>
                            <li>
                                <img src="{{asset('fontend/assets/images/blog/r-post-4.jpg')}}" alt="image" />
                                <h4>
                                    <a href="blog-details.html">Quis nostrud exercitation ullamco laboris nisi</a>
                                </h4>
                                <p>sat, 08-08-2016 |
                                    <span> No Comment</span>
                                </p>
                            </li>
                        </ul>
                    </div><!-- End widget list -->

                    <div class="widget widget_categories"><!-- widget list -->
                        <h3 class="blog_heading_border"> Blog Categories </h3>
                        <ul>
                            <li>
                                <a href="#"> All </a>
                                <span class="categoryCount">(50)</span>
                            </li>
                            <li>
                                <a href="#"> Web Design </a>
                                <span class="categoryCount">(10)</span>
                            </li>
                            <li>
                                <a href="#"> Graphic Design </a>
                                <span class="categoryCount">(07)</span>
                            </li>
                            <li>
                                <a href="#"> Web Development </a>
                                <span class="categoryCount">(18)</span>
                            </li>
                            <li>
                                <a href="#"> Marketing </a>
                                <span class="categoryCount">(08)</span>
                            </li>
                            <li>
                                <a href="#"> Security </a>
                                <span class="categoryCount">(05)</span>
                            </li>
                            <li>
                                <a href="#"> Bug Fixing </a>
                                <span class="categoryCount">(02)</span>
                            </li>
                        </ul>
                    </div><!-- End widget list -->

                    <div class="widget widget_custom_menu"><!-- widget list -->
                        <h3 class="blog_heading_border"> Custom Menu </h3>
                        <ul>
                            <li>
                                <a href="#"> Home </a>
                            </li>
                            <li>
                                <a href="#"> About us </a>
                            </li>
                            <li>
                                <a href="#"> Single </a>
                            </li>
                            <li>
                                <a href="#"> Video </a>
                            </li>
                            <li>
                                <a href="#"> Gallery </a>
                            </li>
                            <li>
                                <a href="#"> Blog </a>
                            </li>
                            <li>
                                <a href="#"> Contact Us </a>
                            </li>
                        </ul>
                    </div><!-- End widget list -->

                    <div class="widget widget_follow"><!-- widget list -->
                        <h3 class="blog_heading_border">Follow Me</h3>
                        <div class="blog-social">
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-facebook"></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-twitter"></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-instagram"></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-google-plus"></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-rss"></span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="socibox">
                                    <span class="fa fa-youtube-play"></span>
                                </div>
                            </a>
                        </div><!-- end blog-social -->
                    </div><!-- End widget list -->

                    <div class="widget widget_tag_cloud"><!-- widget list -->
                        <h3 class="blog_heading_border"> Blog Tags </h3>
                        <ul>
                            <li>
                                <a href="#"> Web Design </a>
                            </li>
                            <li>
                                <a href="#"> Graphic Design </a>
                            </li>
                            <li>
                                <a href="#"> Html </a>
                            </li>
                            <li>
                                <a href="#"> CSS </a>
                            </li>
                            <li>
                                <a href="#"> Web Development </a>
                            </li>
                            <li>
                                <a href="#"> Marketing </a>
                            </li>
                            <li>
                                <a href="#"> php </a>
                            </li>
                            <li>
                                <a href="#"> Wordpress </a>
                            </li>
                            <li>
                                <a href="#"> Security </a>
                            </li>
                            <li>
                                <a href="#"> Bug Fixing </a>
                            </li>
                        </ul>
                    </div><!-- End widget list -->

                    <div class="widget widget_instagram"><!-- widget list -->
                        <h3 class="blog_heading_border">Follow on instagram</h3>
                        <div class="instagram-wrapper clearfix">
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_01.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_02.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_03.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_04.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_05.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_06.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_07.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_08.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_09.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_10.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_11.jpg')}}" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('fontend/assets/images/insta/insta_12.jpg')}}" alt="" class="img-fluid"></a>
                        </div><!-- end images/instagram wrapper -->
                    </div><!-- End widget list -->

                    <div class="widget"><!-- widget list -->
                        <h3 class="blog_heading_border">Advertisement</h3>
                        <a href="#"><img src="{{asset('fontend/assets/images/banner.jpg')}}" alt="" class="img-fluid"></a>
                    </div><!-- End widget list -->
                </aside>
                <!--* End Blog Sidebar*-->

            </div>
        </div>
    </section>
    <!--*End Blog div Sec*-->
@endsection
