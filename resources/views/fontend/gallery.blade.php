@extends('layouts.fontend_layout')
@section('content')

    <!-- Banner -->
    <div id="blog_banner">
        <div class="page-title">
            <div class="container">
                <h2>Gallery</h2>
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
                <li><a class="active" href="#">Gallery</a></li>

            </ul>
        </div>
    </div>
    <!-- End breadcrumb -->

    <!-- Gallery -->
    <section id="the-gallery" class="wide-gallery inner-gallery section-inner">
        <div class="container">
            <!-- section title -->
            <div class="inner-heading">
                <h3>Gallery</h3>
                <h2>See and feel it</h2>
            </div>
            <div class="row ge_second">
                @foreach($galleries as $gallery)
                <div class="col-sm-4 mix">
                    <div class="item port-popup">
                        <a href="{{asset('uploads/gallery/'.$gallery->photo)}}" title="">
                            <img src="{{asset('uploads/gallery/'.$gallery->photo)}}" alt="">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
                @endforeach
                {{$galleries->links()}}

            </div>
        </div>
    </section>
    <!-- End Gallery -->
@endsection
