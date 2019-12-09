@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Contact Us</h2>
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
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!--* Contact*-->
    <section id="mt_contact" class="contact-main section-inner">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Contact Us</h3>
                <h2>Always ahead for your solutions</h2>
            </div>

            <!-- Contact Us Map -->
            <div class="map">
                <div id="map" style="height: 300px; width: 100%;"></div>
            </div>
            <!-- section -->

            <div class="contact-inner">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> Gartenstraße 9, 6832 Sulz</li>
                            <li><i class="fa fa-phone"></i> +43 21645896</li>
                            <li><i class="fa fa-envelope"></i> info@sitename.com</li>
                            <li><i class="fa fa-globe"></i> www.sitename.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_form">
                        <form id="contact_form">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                            <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
                            <button class="mt_btn_yellow" id="submit-btn">SEND MESSAGE
                                <span class="mt_load">
                                    <span></span>
                                </span>
                            </button>
                            <div id="msg"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--* End Contact*-->

@endsection
