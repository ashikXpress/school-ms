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
                            <img src="{{asset('admin/assets/img/dp.jpg')}}" class="img-circle user-img-circle"
                                 alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p> Kiran Patel</p>
                            <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('dashboard*') ? 'active' : null }}">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="material-icons">dashboard</i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>

                    </a>
                </li>

                <li class="nav-item {{ Request::is('academic/*') ? 'start active open' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Academic</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li class="nav-item {{ Request::is('academic/create-class') ? 'active' : null }}">
                          <a href="{{route('create.class.form')}}" class="nav-link ">
                              <span class="title">Create Class</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('academic/create-section') ? 'active' : null }}">
                            <a href="{{route('create.section.form')}}" class="nav-link ">
                                <span class="title">Create section</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('academic/create-subject') ? 'active' : null }}">
                            <a href="{{route('create.subject.form')}}" class="nav-link ">
                                <span class="title">Create subject</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::is('academic/create-designation') ? 'active' : null }}">
                            <a href="{{route('create.designation.form')}}" class="nav-link ">
                                <span class="title">Create designation</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ Request::is('student*') ? 'start active open ' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Students</span><span class="arrow"></span></a>
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
                        <li class="nav-item {{ Request::is('student/attendance') ? 'active' : null }}">
                            <a href="{{route('student.attendance.form')}}" class="nav-link ">
                                <span class="title">Student attendance</span>
                            </a>
                        </li>


                    </ul>
                </li>


                <li class="nav-item {{ Request::is('employee/*') ? 'active' : null }}">
                    <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                        <span class="title">Employee</span><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li class="nav-item {{ Request::is('employee/employee-join') ? 'active' : null }}">
                            <a href="{{route('employee.join.form')}}" class="nav-link ">
                                <span class="title">Add employee</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('employee/employee-attendance') ? 'active' : null }}">
                            <a href="{{route('employee.attendance.form')}}" class="nav-link ">
                                <span class="title">Employee attendance</span>
                            </a>
                        </li>
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
