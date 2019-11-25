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



                <li class="nav-item {{ Request::is('dashboard*') ? 'active' : null }}">
                            <a href="{{route('dashboard')}}" class="nav-link">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>

                            </a>
                        </li>

                <li class="nav-item {{ Request::is('employee/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Manage Employee</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('employee/create-designation') ? 'active' : null }}">
                            <a href="{{route('create.designation.form')}}" class="nav-link ">
                                <span class="title">Manage Designation</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('employee/employee-join') ? 'active' : null }}">
                            <a href="{{route('employee.join.form')}}" class="nav-link ">
                                <span class="title">Add employee</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('employee/employee-lists') ? 'active' : null }}">
                            <a href="{{route('employee.lists')}}" class="nav-link ">
                                <span class="title">All employee</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ Request::is('student*') ? 'start active open ' : null }}">
                        <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                            <span class="title">Manage Students</span><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="nav-item {{ Request::is('student/admission') ? 'active' : null }}">
                                <a href="{{route('student.admission.form')}}" class="nav-link ">
                                    <span class="title">Admission</span>
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('student/student-lists') ? 'active' : null }}">
                                <a href="{{route('student.lists')}}" class="nav-link ">
                                    <span class="title">All Student</span>
                                </a>
                            </li>



                        </ul>
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
                        <li class="nav-item {{ Request::is('attendance/employee-attendance') ? 'active' : null }}">
                            <a href="{{route('employee.attendance.form')}}" class="nav-link ">
                                <span class="title">Employee attendance</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('attendance/employee-attendance-info') ? 'active' : null }}">
                            <a href="{{route('employee.attendance.info')}}" class="nav-link ">
                                <span class="title">Employee attendance info</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item {{ Request::is('academic/*') ? 'start active open' : null }}">
                            <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Academic & Classes</span><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li class="nav-item {{ Request::is('academic/create-class') ? 'active' : null }}">
                                    <a href="{{route('create.class.form')}}" class="nav-link ">
                                        <span class="title">Manage Class</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('academic/create-section') ? 'active' : null }}">
                                    <a href="{{route('create.section.form')}}" class="nav-link ">
                                        <span class="title">Manage Section</span>
                                    </a>
                                </li>

                                <li class="nav-item {{ Request::is('academic/create-subject') ? 'active' : null }}">
                                    <a href="{{route('create.subject.form')}}" class="nav-link ">
                                        <span class="title">Manage Subject</span>
                                    </a>
                                </li>


                            </ul>
                        </li>



                <li class="nav-item {{ Request::is('class-routine/*') ? 'active' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Class Routine</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('class-routine/create-class-routine') ? 'active' : null }}">
                            <a href="{{route('create.class.routine.form')}}" class="nav-link ">
                                <span class="title">Create class routine</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('class-routine/show-class-routine') ? 'active' : null }}">
                            <a href="{{route('show.class.routine.form')}}" class="nav-link ">
                                <span class="title">Show class routine</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('exam/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Exam</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('exam/create-exam-term') ? 'active' : null }}">
                            <a href="{{route('create.exam.term.form')}}" class="nav-link ">
                                <span class="title">Manage Exam Term</span>
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

                <li class="nav-item {{ Request::is('subject/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Notice</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item {{ Request::is('employee/employee-lists') ? 'active' : null }}">
                            <a href="{{route('employee.lists')}}" class="nav-link ">
                                <span class="title">All employee</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
