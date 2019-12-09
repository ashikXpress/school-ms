<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>
        @isset($title)
            {{$title.' |'}}
        @endisset

        {{config('app.name')}}
    </title>
    <!-- google font -->
   @include('layouts.assets._styles')
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->

    @include('layouts.assets._top_bar')



    <!-- end header -->
    <!-- start color quick setting -->

    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->

            @if(Auth::guard('employee')->check() && Auth::guard('employee')->user()->user_type=='admin')
                @include('layouts.assets._side_bar')
            @elseif(Auth::guard('employee')->check() && Auth::guard('employee')->user()->user_type=='teacher')
                @include('layouts.assets._teacher_side_bar')
            @endif





        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                @include('layouts.assets._header_msg')
              @yield('content')
            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->

        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    @include('layouts.assets._footer')
    <!-- end footer -->
</div>
<!-- start js include path -->
@include('layouts.assets._scripts')
<!-- end js include path -->
</body>
</html>
