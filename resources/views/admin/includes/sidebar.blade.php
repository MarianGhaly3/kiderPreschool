<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin') }}" class="logo">
                <img src="{{ asset('assets/admin/img/kaiadmin/kider_logo.png') }}" alt="navbarbrand"
                    class="navbar-brand" height="30" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar"> <i class="gg-menu-right"></i> </button>
                <button class="btn btn-toggle sidenav-toggler"> <i class="gg-menu-left"></i> </button>
            </div>
            <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i> </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin') }}">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Nav Item Teachers -->
                <li class="nav-item ">
                    <a data-bs-toggle="collapse" href="#teachers" class="collapsed" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <p>Teachers</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="teachers">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('teachers') }}">
                                    <span class="sub-item">Teachers</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('addTeacher') }}">
                                    <span class="sub-item">Add Teacher</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Nav Item -->

                <!-- Nav Item Courses -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#classes" class="collapsed" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        <p>Courses</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="classes">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('courses') }}">
                                    <span class="sub-item">Courses</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('addCourse') }}" >
                                    <span class="sub-item">Add Course</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Nav Item -->

                <!-- Nav Item Students-->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#students" class="collapsed" aria-expanded="false">
                        <i class="fa fa-graduation-cap"></i>
                        <p>Students</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="students">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Students</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Add Student</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Nav Item -->

                <!-- Nav Item Appointment-->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#appointments" class="collapsed">
                        <i class="fas fa-layer-group"></i>
                        <p>Appointments</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="appointments">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Appointments</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Add Appointment</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Nav Item -->

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="far fa-chart-bar"></i>
                        <p>Charts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Widgets</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Menu Levels</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Level 1</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->