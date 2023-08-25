<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Blog</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Fonts (google font) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&family=Urbanist:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Magnific-popup stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/magnific-popup.css')}}">
    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/owl.carousel.css')}}">
    <!-- Owl theme stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/owl.theme.default.min.css')}}">
    <!-- MeanMenu stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/meanmenu.min.css')}}">
    <!-- Animated headline stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/jquery.animatedheadline.css')}}">
    <!-- Imgal stylesheet -->
    <link rel="stylesheet" href="{{asset('css/imgal.min.css')}}">
    <!-- font awesome stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/all.min.css')}}">
    <!-- AOS stylesheet -->
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset ('css/normalize.css')}}">
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset ('css/responsive.css')}}">
</head>

<body class="home-four-body">
    <main class="home-four overflow-x-hidden">
        <!-- start header -->
        <header class="light-bg header">
            <!-- mobile header nav -->
            <div class="mobile-menu d-block d-md-none position-relative z-1">
                <nav>
                    <ul class="menu">
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Resume</a></li>
                        <li><a href="">Portfolio</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container d-none d-md-block position-relative z-1">
                <div class="header-wrapper d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html">
                            <img src="img/Logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="header-menu-wrapper main-menu">
                        <!-- nav menu -->
                        <nav class="desktop-nav">
                            <ul class="header-menu d-flex flex-row justify-content-center menu">
                                <li class="px-3">
                                    <a class="menu-link" href="">Home</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="">About</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="">Services</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="">Resume</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="">Portfolio</a>
                                </li>

                                <li class="px-3">
                                    <a class="menu-link" href="">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header button -->
                    <div class="header-btn-wrapper">
                        <a class="btn orange-btn btn_effect" href="#">
                            <span class="z-1 position-relative">contact us</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- start inner page hero section -->
        <section class="inner-page-hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-middle">
                            <div class="sub-heading d-flex align-items-center mx-auto">
                                <img src="img/orangeDot.png" alt="orange-dot">
                                {{-- <p>My Blog</p> --}}
                            </div>
                            <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                                Hasil Event
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page hero section -->
        <!-- start blog archieve -->
        <section class="resume-four">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blogs-wrapper">
                            <div class="blogs-container">
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="img/blogOne.png" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">20 January,
                                            2023
                                        </p>
                                        <a href="blogDetails.html">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">Event</h3>
                                        </a>
                                        <a href="/hasil-vote">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Lihat</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="img/blogTwo.png" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">15 January,
                                            2023
                                        </p>
                                        <a href="blogDetails.html">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">Event</h3>
                                        </a>
                                        <a href="/hasil-vote">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Lihat</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="img/blogThree.png" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">08 January,
                                            2023
                                        </p>
                                        <a href="blogDetails.html">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">Event</h3>
                                        </a>
                                        <a href="/hasil-vote">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Lihat</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blogs -->
        <!-- start footer -->
        <section class="footer">
            <div class="footer-wrapper">
                <div class="footer-bottom">
                    <div class="container">
                        <div class="footer-bottom-container">
                            <div class="row">
                                <div class="footerbottom-left col-12 col-sm-5 col-md-6 text-start">
                                    <p class="p text-white line-height-7">
                                        All rights reserved &copy; 2023 Credesign
                                    </p>
                                </div>
                                <div class="footerbottom-right col-12 col-sm-7 col-md-6">
                                    <ul class="d-flex justify-content-sm-end">
                                        <li class="mr-100">
                                            <a class="text-white p" href="termsandconditions.html">
                                                Terms & Condition
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-white p" href="privacypolicy.html">
                                                Privacy policy
                                            </a>
                                        </li>
                                    </ul>
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
    <script src="{{asset ('js/jquery-3.6.4.min.js')}}"></script>
    <!-- Bootstrap Script -->
    <script src="{{asset ('js/bootstrap.min.js')}}"></script>
    <!-- Magnific-popup script -->
    <script src="{{asset ('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Owl carousel script -->
    <script src="{{asset ('js/owl.carousel.min.js')}}"></script>
    <!-- MeanMenu script -->
    <script src="{{asset ('js/jquery.meanmenu.js')}}"></script>
    <!-- Line progressbar script -->
    <script src="{{asset ('js/jquery.lineProgressbar.js')}}"></script>
    <!-- Multi animated counter -->
    <script src="{{asset ('js/multi-animated-counter.js')}}"></script>
    <!-- One page nav script -->
    <script src="{{asset ('js/onepageNav.js')}}"></script>
    <!-- font awesome script -->
    <script src="{{asset ('js/all.min.js')}}"></script>
    <!-- AOS script -->
    <script src="{{asset ('js/aos.js')}}"></script>
    <!-- Animated headline script -->
    <script src="{{asset ('')}}js/jquery.animatedheadline.min.js"></script>

    <!-- mixitup -->
    <script src="{{asset ('js/mixitup.min.js')}}"></script>
    <!-- jQuery Counterup -->
    <script src="{{asset ('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset ('js/jquery.counterup.min.js')}}"></script>
    <!-- Main JS script -->
    <script src="{{asset ('js/main.js')}}"></script>
</body>

</html>