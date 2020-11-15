<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hansaya - Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

    <!-- page css -->
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- page css -->
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">


    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    @if(auth()->user()->is_admin)
                    <a href="adminHome">
                        <img src="images/logo.png" height="50px" style="margin-top: 10px;" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo">
                    </a>
                    @else
                    <a href="userHome">
                        <img src="images/logo.png" height="50px" style="margin-top: 10px;" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo">
                    </a>
                    @endif

                    
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-white.png" alt="Logo">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <!-- <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">New user registered</p>
                                                    <p class="m-b-0"><small>7 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-red avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">System Alert</p>
                                                    <p class="m-b-0"><small>8 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 ">
                                            <div class="d-flex">
                                                <div class="avatar avatar-gold avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You have a new update</p>
                                                    <p class="m-b-0"><small>2 days ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li> -->
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="{{ auth()->user()->profile }}" alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="{{ auth()->user()->profile }}" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">
                                                @if (strlen(strip_tags( auth()->user()->name )) > 13)
                                                {!! substr(strip_tags( auth()->user()->name ), 0, 13) !!}...
                                                @else
                                                {{ auth()->user()->name }}
                                                @endif
                                            </p>
                                            <p class="m-b-0 opacity-07">
                                                @if(auth()->user()->is_admin)
                                                Admin
                                                @else
                                                Student
                                                @endif

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="edit_profile" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>



                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>



                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                    @if(auth()->user()->is_admin)
                        <li class="active">
                            <a class="dropdown-toggle" href="adminHome">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                 
                        <li class="active">
                            <a class="dropdown-toggle" href="users">
                                <span class="icon-holder">
                                    <i class="anticon anticon-user"></i>
                                </span>
                                <span class="title">Users</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="dropdown-toggle" href="upload_file">
                                <span class="icon-holder">
                                    <i class="anticon anticon-form"></i>
                                </span>
                                <span class="title">File Upload</span>
                            </a>
                        </li>


                        <li class="active">
                            <a class="dropdown-toggle" href="manage_file">
                                <span class="icon-holder">
                                    <i class="anticon anticon-hdd"></i>
                                </span>
                                <span class="title">Manage Files</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="dropdown-toggle" href="create_link">
                                <span class="icon-holder">
                                    <i class="anticon anticon-audit"></i>
                                </span>
                                <span class="title">Create Link</span>
                            </a>
                        </li>


                        <li class="active">
                            <a class="dropdown-toggle" href="manage_links">
                                <span class="icon-holder">
                                    <i class="anticon anticon-link"></i>
                                </span>
                                <span class="title">Manage Links</span>
                            </a>
                        </li>
                        @endif

                        @if(!auth()->user()->is_admin)

                        <li class="active">
                            <a class="dropdown-toggle" href="userHome">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="dropdown-toggle" href="manage_file_student_pdf">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file-pdf"></i>
                                </span>
                                <span class="title">PDF Files</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="dropdown-toggle" href="manage_file_student_word">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file-word"></i>
                                </span>
                                <span class="title">Word Files</span>
                            </a>
                        </li>

                        <li class="active">
                            <a class="dropdown-toggle" href="manage_links_students">
                                <span class="icon-holder">
                                    <i class="anticon anticon-link"></i>
                                </span>
                                <span class="title">Your Links</span>
                            </a>
                        </li>

                        @endif



                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->


            @yield('content')





            <!-- Footer START -->
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">© 2020 CreatX Software. Created by Kavindu Theekshana. 071 542 14 23</p>

                </div>
            </footer>
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Search</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body scrollable">
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-search"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="m-t-30">
                            <h5 class="m-b-20">Files</h5>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-cyan avatar-icon">
                                    <i class="anticon anticon-file-excel"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                    <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-blue avatar-icon">
                                    <i class="anticon anticon-file-word"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                    <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-purple avatar-icon">
                                    <i class="anticon anticon-file-text"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                    <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-red avatar-icon">
                                    <i class="anticon anticon-file-pdf"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                    <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <h5 class="m-b-20">Members</h5>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                    <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                    <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="upload/users/default.png" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                    <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <h5 class="m-b-20">News</h5>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/others/img-1.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                    <p class="m-b-0 text-muted font-size-13">
                                        <i class="anticon anticon-clock-circle"></i>
                                        <span class="m-l-5">25 Nov 2018</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End-->

        <!-- Quick View START -->
        <!-- <div class="modal modal-right fade quick-view" id="quick-view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Theme Config</h5>
                    </div>
                    <div class="modal-body scrollable">
                        <div class="m-b-30">
                            <h5 class="m-b-0">Header Color</h5>
                            <p>Config header background color</p>
                            <div class="theme-configurator d-flex m-t-10">
                                <div class="radio">
                                    <input id="header-default" name="header-theme" type="radio" checked value="default">
                                    <label for="header-default"></label>
                                </div>
                                <div class="radio">
                                    <input id="header-primary" name="header-theme" type="radio" value="primary">
                                    <label for="header-primary"></label>
                                </div>
                                <div class="radio">
                                    <input id="header-success" name="header-theme" type="radio" value="success">
                                    <label for="header-success"></label>
                                </div>
                                <div class="radio">
                                    <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                    <label for="header-secondary"></label>
                                </div>
                                <div class="radio">
                                    <input id="header-danger" name="header-theme" type="radio" value="danger">
                                    <label for="header-danger"></label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class="m-b-0">Side Nav Dark</h5>
                            <p>Change Side Nav to dark</p>
                            <div class="switch d-inline">
                                <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                <label for="side-nav-theme-toogle"></label>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class="m-b-0">Folded Menu</h5>
                            <p>Toggle Folded Menu</p>
                            <div class="switch d-inline">
                                <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                <label for="side-nav-fold-toogle"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Quick View END -->
    </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/js/pages/dashboard-default.js"></script>

    <!-- page js -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-elements.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>


    <!-- page js -->
    <script src="assets/js/pages/profile.js"></script>

    <!-- page js -->
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/quill/quill.min.js"></script>
    <!-- <script src="assets/js/pages/mail.js"></script> -->


</body>

</html>