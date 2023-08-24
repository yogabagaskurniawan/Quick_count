<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
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
</head>

<body class="home-one-body">
    <main class="home overflow-x-hidden">
        <!-- start header -->
        <header class="bg-white header">
            <!-- mobile header nav -->
            <div class="mobile-menu d-block d-md-none">
                <nav>
                    <ul class="menu">
                        <li><a href="/user/event">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="portfolio.html">Portfolio</a> </li>

                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container d-none d-md-block">
                <div class="header-wrapper d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('guests/img/Logo.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="header-menu-wrapper main-menu">
                        <!-- nav menu -->
                        <nav class="desktop-nav">
                            <ul class="header-menu d-flex flex-row justify-content-center menu">
                                <li class="px-3">
                                    <a class="menu-link" href="/user/event">Home</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="about.html">About</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="services.html">Services</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="resume.html">Resume</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="portfolio.html">Portfolio</a>
                                </li>

                                <li class="px-3">
                                    <a class="menu-link" href="blog.html">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header button -->
                    <div class="header-btn-wrapper">
                        <a class="btn orange-btn btn_effect" href="contact.html">
                            <span class="z-1 position-relative">contact us</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
    </div>
</div>
</header>
<!-- end header -->

        <section class="blogs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blogs-wrapper">
                            <div class="section-heading-middle">
                                <div class="sub-heading d-flex align-items-center mx-auto">
                                    <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                                    <p>My Blog</p>
                                </div>
                                <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                                    KANDIDAT
                                </h2>
                            </div>
                            <div class="blogs-container row-mobile-margin mt-50">
                                <div class="card p-0 blog-card">
                                    {{-- <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogOne.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div> --}}
                                    <div class="portfolio-massonary-items mix ui all position-relative">
                                        <img src="{{asset('guests/img/blogOne.png')}}" class="card-img-top img-fluid blog-card-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <a href="/user/detailkandidat"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    Detail Kandidat Klik Disini
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">Prodi</p>
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">KANDIDAT 1.</h3>
                                        <a href="/user/detailevent">
                                            <div class="header-btn-wrapper mt-3">
                                                <a class="btn orange-btn btn_effect" href="contact.html">
                                                    <span class="z-1 position-relative">PILIH</span>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    {{-- <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogTwo.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div> --}}
                                    <div class="portfolio-massonary-items mix ui all position-relative">
                                        <img src="{{asset('guests/img/blogOne.png')}}" class="card-img-top img-fluid blog-card-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <a href="/user/detailkandidat"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    Detail Kandidat Klik Disini
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">Prodi</p>
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">KANDIDAT 2.</h3>
                                        <a href="/user/detailevent">
                                            <div class="header-btn-wrapper mt-3">
                                                <a class="btn orange-btn btn_effect" href="contact.html">
                                                    <span class="z-1 position-relative">PILIH</span>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    {{-- <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogThree.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                     </div> --}}
                                     <div class="portfolio-massonary-items mix ui all position-relative">
                                        <img src="{{asset('guests/img/blogOne.png')}}" class="card-img-top img-fluid blog-card-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <a href="/user/detailkandidat"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    Detail Kandidat Klik Disini
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">Prodi</p>
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">KANDIDAT 3.</h3>
                                        <a href="/user/detailevent">
                                            <div class="header-btn-wrapper mt-3">
                                                <a class="btn orange-btn btn_effect" href="contact.html">
                                                    <span class="z-1 position-relative">PILIH</span>
                                                </a>
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

    </main>
    <!-- Preloader -->
    {{-- <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> --}}

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
</body>

</html>