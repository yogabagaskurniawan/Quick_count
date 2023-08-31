<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>Dashboard | Quick Count</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('guests/img/uniss.png') }}">
    
        <link href="{{ asset('assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
        
        @yield('css')
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/admin" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('guests/img/uniss.png') }}" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('guests/img/uniss.png') }}" alt="" height="60">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <div class="d-flex">
                          <!-- App Search-->
                          <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-md-block ms-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/germany_flag.jpg') }} " alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                        
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg') }}"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> {{Auth::user()->name}}</a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/admin/mahasiswa" class="waves-effect">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <span>Mahasiswa</span>
                                </a>
                            </li>

                            <li>
                                <a href="/admin/event" class=" waves-effect">
                                    <i class="fa fa-calendar-plus" aria-hidden="true"></i>
                                    <span>Event</span>
                                </a>
                            </li>

                            <li>
                                <a href="/admin/kandidat" class=" waves-effect">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <span>Kandidat</span>
                                </a>
                            </li>

                            <li class="menu-title">Result</li>

                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="fa fa-history" aria-hidden="true"></i>
                                    <span>Histori event</span>
                                </a>
                            </li>

                            <li>
                                <a href="calendar.html" class=" waves-effect">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <span>Kandidat</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                
                <div class="page-content">
                    @if (Route::is('admin'))
                        <div class="container-fluid">
        
                            <!-- start page title -->
                            <div class="page-title-box">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h6 class="page-title">Dashboard</h6>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="float-end d-none d-md-block">
                                            <div class="dropdown">
                                                <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-cog me-2"></i> Settings
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
                            
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat bg-primary text-white">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <div class="float-start mini-stat-img me-4">
                                                    <img src="assets/images/services-icon/01.png" alt="">
                                                </div>
                                                <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                                                <h4 class="fw-medium font-size-24">1,685 <i
                                                        class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                                <div class="mini-stat-label bg-success">
                                                    <p class="mb-0">+ 12%</p>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <div class="float-end">
                                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                                </div>
        
                                                <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat bg-primary text-white">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <div class="float-start mini-stat-img me-4">
                                                    <img src="assets/images/services-icon/02.png" alt="">
                                                </div>
                                                <h5 class="font-size-16 text-uppercase text-white-50">Revenue</h5>
                                                <h4 class="fw-medium font-size-24">52,368 <i
                                                        class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                                                <div class="mini-stat-label bg-danger">
                                                    <p class="mb-0">- 28%</p>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <div class="float-end">
                                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                                </div>
        
                                                <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat bg-primary text-white">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <div class="float-start mini-stat-img me-4">
                                                    <img src="assets/images/services-icon/03.png" alt="">
                                                </div>
                                                <h5 class="font-size-16 text-uppercase text-white-50">Average Price</h5>
                                                <h4 class="fw-medium font-size-24">15.8 <i
                                                        class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                                <div class="mini-stat-label bg-info">
                                                    <p class="mb-0"> 00%</p>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <div class="float-end">
                                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                                </div>
        
                                                <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card mini-stat bg-primary text-white">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <div class="float-start mini-stat-img me-4">
                                                    <img src="assets/images/services-icon/04.png" alt="">
                                                </div>
                                                <h5 class="font-size-16 text-uppercase text-white-50">Product Sold</h5>
                                                <h4 class="fw-medium font-size-24">2436 <i
                                                        class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                                <div class="mini-stat-label bg-warning">
                                                    <p class="mb-0">+ 84%</p>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <div class="float-end">
                                                    <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                                </div>
        
                                                <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
        
                        </div> <!-- container-fluid -->
                    @else
                        <div class="container-fluid">   
                            @yield('content')
                        </div>
                    @endif
                </div>
                <!-- End Page-content -->


                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                All rights reserved &copy; <script>document.write(new Date().getFullYear())</script> Universitas Selamat Sri
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>


        <!-- Peity chart-->
        <script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- Plugin Js-->
        <script src="{{ asset('assets/libs/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        @yield('script')

        <script>
            // demo img file
            function preview(target, image){
                $(target)
                .attr('src', window.URL.createObjectURL(image))
                .show();
            }
        </script>
    </body>

</html>