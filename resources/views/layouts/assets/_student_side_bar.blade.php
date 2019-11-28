<div class="sidebar-container">
    <div class="sidemenu-container navbar-collapse collapse fixed-menu">
        <div id="remove-scroll" class="left-sidemenu">
            <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="sidebar-user-panel">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{asset('uploads/'.optional(Auth::guard('student')->user())->photo)}}" class="img-circle user-img-circle"
                                 alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{optional(Auth::guard('student')->user())->first_name}}</p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
                        </div>
                    </div>
                </li>



                <li class="nav-item {{ Request::is('student/dashboard') ? 'active' : null }}">
                    <a href="{{route('student.dashboard')}}" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>

                    </a>
                </li>

                <li class="nav-item {{ Request::is('student/id-card') ? 'active' : null }}">
                    <a href="{{route('student.id.card')}}" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">ID Card</span></a>
                </li>
                <li class="nav-item {{ Request::is('student/attendance-report') ? 'active' : null }}">
                    <a href="{{route('student.attendance.report')}}" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Attendance Report</span></a>
                </li>

                <li class="nav-item {{ Request::is('exam/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Exam</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('') ? 'active' : null }}">
                            <a href="" class="nav-link ">
                                <span class="title">Exam routine</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::is('student/syllabus') ? 'active' : null }}">
                    <a href="{{route('student.syllabus')}}" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Syllabus</span>
                        <span class="selected"></span>

                    </a>
                </li>
                <li class="nav-item {{ Request::is('') ? 'active' : null }}">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Assignment</span>
                        <span class="selected"></span>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
