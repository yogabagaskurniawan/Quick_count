<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Quick Count</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('guests/img/uniss.png')}}">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&family=Urbanist:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/bootstrap.min.css')}}">
    <!-- Magnific-popup stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/magnific-popup.css')}}">
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/owl.carousel.css')}}">
    <!-- Owl theme stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/owl.theme.default.min.css')}}">
    <!-- MeanMenu stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/meanmenu.min.css')}}">
    <!-- Animated headline stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/jquery.animatedheadline.css')}}">
    <!-- Imgal stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/imgal.min.css')}}">
    <!-- font awesome stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/all.min.css')}}">
    <!-- AOS stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/aos.css')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('guests/css/normalize.css')}}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('guests/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="home-one-body">
    <main class="home overflow-x-hidden">
        <header class="position-absolute top-0 left-0 w-100 mt-25">
            <!-- mobile header nav -->
            <div class="mobile-menu d-block d-md-none">
                <nav>
                    <ul class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/event">Event</a></li>
                        <li><a href="/hasil-event">Hasil Event</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container d-none d-md-block position-relative z-1">
                <div class="header-wrapper d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="/">
                            <img src="{{asset('guests/img/uniss.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="header-menu-wrapper main-menu">
                        <!-- nav menu -->
                        <nav class="desktop-nav">
                            <ul class="header-menu d-flex flex-row justify-content-center menu">
                                <li class="px-3">
                                    <a class="menu-link" href="/">Home</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="/event">Event</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="/hasil-event">Hasil Event</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header button -->
                    <div class="header-btn-wrapper">
                        @guest
                            <a class="btn orange-btn btn_effect" href="{{ url('login') }}">
                                <span class="z-1 position-relative">Login</span>
                            </a>
                        @else
                            <a class="btn orange-btn btn_effect" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="z-1 position-relative">{{ Auth::user()->name }} <i class="bi bi-box-arrow-right"></i></span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
</header>
<!-- end header -->

@yield('content')

<!-- start footer -->
<section class="footer">
    <div class="footer-wrapper">
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-container">
                    <div class="row">
                        <div class="footerbottom-left col-12 col-sm-5 col-md-6 text-start">
                            <p class="p text-white line-height-7">
                                All rights reserved &copy; <script>document.write(new Date().getFullYear())</script> Universitas Selamat Sri
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end footer -->
</main>

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>

    <!-- Jquery script -->
    <script src="{{asset('guests/js/jquery-3.6.4.min.js')}}"></script>
    <!-- Bootstrap Script -->
    <script src="{{asset('guests/js/bootstrap.min.js')}}"></script>
    <!-- Magnific-popup script -->
    <script src="{{asset('guests/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Owl carousel script -->
    <script src="{{asset('guests/js/owl.carousel.min.js')}}"></script>
    <!-- MeanMenu script -->
    <script src="{{asset('guests/js/jquery.meanmenu.js')}}"></script>
    <!-- Line progressbar script -->
    <script src="{{asset('guests/js/jquery.lineProgressbar.js')}}"></script>
    <!-- Multi animated counter -->
    <script src="{{asset('guests/js/multi-animated-counter.js')}}"></script>
    <!-- One page nav script -->
    <script src="{{asset('guests/js/onepageNav.js')}}"></script>
    <!-- font awesome script -->
    <script src="{{asset('guests/js/all.min.js')}}"></script>
    <!-- AOS script -->
    <script src="{{asset('guests/js/aos.js')}}"></script>
    <!-- Animated headline script -->
    <script src="{{asset('guests/js/jquery.animatedheadline.min.js')}}"></script>
    <!-- mixitup -->
    <script src="{{asset('guests/js/mixitup.min.js')}}"></script>
    <!-- jQuery Counterup -->
    <script src="{{asset('guests/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('guests/js/jquery.counterup.min.js')}}"></script>
    <!-- Main JS script -->
    <script src="{{asset('guests/js/main.js')}}"></script>

    @yield('script')

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
</body>

</html>