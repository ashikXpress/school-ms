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
                            <img src="{{asset(optional(Auth::guard('employee')->user())->photo)}}" class="img-circle user-img-circle"
                                 alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{optional(Auth::guard('employee')->user())->first_name.' '.optional(Auth::guard('employee')->user())->last_name}}</p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
                        </div>
                    </div>
                </li>



                <li class="nav-item {{ Request::is('teacher/dashboard') ? 'active' : null }}">
                            <a href="{{route('teacher.dashboard')}}" class="nav-link">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>

                            </a>
                        </li>

                <li class="nav-item {{ Request::is('employee/employee-lists') ? 'start active open' : null }}">
                    <a href="{{route('employee.lists')}}" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Employee</span></a>

                </li>


                <li class="nav-item {{ Request::is('student/student-lists') ? 'start active open ' : null }}">
                        <a href="{{route('student.lists')}}" class="nav-link nav-toggle"><i class="material-icons">group</i>
                            <span class="title">All Student</span></a>

                    </li>

                <li class="nav-item {{ Request::is('attendance/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Daily Attendance</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('attendance/student-attendance') ? 'active' : null }}">
                            <a href="{{route('student.attendance.form')}}" class="nav-link ">
                                <span class="title">Student attendance</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('attendance/student-attendance-info') ? 'active' : null }}">
                            <a href="{{route('student.attendance.info')}}" class="nav-link ">
                                <span class="title">Student attendance info</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('attendance/employee-attendance-info') ? 'active' : null }}">
                            <a href="{{route('employee.attendance.info')}}" class="nav-link ">
                                <span class="title">Employee attendance info</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ Request::is('exam/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Exam</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-ite">
                            <a href="" class="nav-link ">
                                <span class="title">Exam Routine</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::is('syllabus/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Syllabus</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('syllabus/create-syllabus') ? 'active' : null }}">
                            <a href="{{route('create.syllabus.form')}}" class="nav-link ">
                                <span class="title">Create Syllabus</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('syllabus/syllabus-lists') ? 'active' : null }}">
                            <a href="{{route('syllabus.list')}}" class="nav-link ">
                                <span class="title">Syllabus list</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::is('notice/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Notice</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('notice/create-diary') ? 'active' : null }}">
                            <a href="{{route('create.diary')}}" class="nav-link ">
                                <span class="title">Student diary</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('subject/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Accounting</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <span class="title">Student payment</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
