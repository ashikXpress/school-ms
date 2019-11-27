@extends('layouts.student_layout')
@section('content')

    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
        <a class="btn btn-sm" href="javascript:window.print()">print</a>
        <div class="white-box border-gray">
            <div class="user-bg">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="{{asset('uploads/'.$idcard->photo)}}"></a>
                        <h4 class="text-white">{{$idcard->first_name.' '.$idcard->last_name}}</h4>
                        <h5 class="text-white">{{$idcard->email}}</h5>
                    </div>
                </div>
            </div>
            <div class="user-btm-box">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="fa fa-facebook"></i></p>
                        <h1>467</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-success"><i class="fa fa-twitter"></i></p>
                        <h1>234</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="fa fa-instagram"></i></p>
                        <h1>686</h1>
                    </div>
                </div>
                <div class="col-md-12  m-b-0 text-center">
                    <div class="stat-item">
                        <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
