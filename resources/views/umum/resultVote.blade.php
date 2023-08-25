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
            <div class="mobile-menu d-block d-md-none">
                <nav>
                    <ul class="menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Resume</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
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
                                    <a class="menu-link" href="#">Home</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="#">About</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="#">Services</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="#">Resume</a>
                                </li>
                                <li class="px-3">
                                    <a class="menu-link" href="#">Portfolio</a>
                                </li>

                                <li class="px-3">
                                    <a class="menu-link" href="#">Blog</a>
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
                                Hasil Vote
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page hero section -->
        <!-- start resume -->
        <section class="resume-four">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="resume-four-container">
                            <div class="row">
                                <div class="col-12 col-xl-5 resume-four-left">
                                    <div class="section-heading">
                                        <div class="sub-heading d-flex align-items-center">
                                            <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                                            <p>Resume</p>
                                        </div>
                                        <h2 class="black-color line-height-3 h2">
                                            Kandidat Vote
                                        </h2>
                                    </div>
                                    <div class="resume-four-skill-grid mt-50 row-mobile-margin">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-xl-7 resume-four-right"> --}}
                            <div class="education-experience-container">
                                <div class="nav nav-tabs d-block border-0">
                                    <ul id="myTab" class="education-experience-nav-tab">
                                        <li class="nav-item w-100">
                                            <a class="resume-nav-tab-item nav-link active" href="#experience"
                                                data-bs-toggle="tab">Vote</a>
                                        </li>
                                        <li class="nav-item w-100">
                                            <a class="resume-nav-tab-item nav-link" href="#education"
                                                data-bs-toggle="tab">Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="experience" class="resume-tab-contents tab-pane fade show active">
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/tablogoOne.png')}}"
                                                    alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">Nama Event
                                            </h5>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-end mt-3 mt-sm-0">
                                            <h4 class="resume-tab-time orange-color fw-600 line-height-5 mb-10">
                                                2 Votes
                                            </h4>
                                            <h5 class="fw-400 line-height-6 black-color">Jan 2021 - Running</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/.tabLogoTwo.png')}}"
                                                    alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">Nama Event
                                            </h5>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-end mt-3 mt-sm-0">
                                            <h4 class="resume-tab-time orange-color fw-600 line-height-5 mb-10">
                                                7 Votes
                                            </h4>
                                            <h5 class="fw-400 line-height-6 black-color">Jan 2014 - Dec 2021
                                            </h5>
                                        </div>
                                    </div>
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/tabLogoThree.png')}}"
                                                    alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">Nama Event
                                            </h5>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-end mt-3 mt-sm-0">
                                            <h4 class="resume-tab-time orange-color fw-600 line-height-5 mb-10">
                                                4 Votes
                                            </h4>
                                            <h5 class="fw-400 line-height-6 black-color">Jan 2010 - Dec 2014
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div id="education" class="resume-tab-contents tab-pane fade">
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/tablogoOne.png')}}" alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">
                                                Visi:
                                                Mewujudkan masyarakat inklusif dan berkelanjutan melalui inovasi dan
                                                kolaborasi.

                                                Misi:
                                                Memajukan potensi individu dan lingkungan melalui pendidikan yang
                                                holistik serta merangkul perkembangan berkelanjutan melalui kerjasama
                                                lintas sektor.
                                            </h5>
                                        </div>

                                    </div>
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/tablogoOne.png')}}" alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">
                                                Visi:
                                                Mewujudkan masyarakat inklusif dan berkelanjutan melalui inovasi dan
                                                kolaborasi.

                                                Misi:
                                                Memajukan potensi individu dan lingkungan melalui pendidikan yang
                                                holistik serta merangkul perkembangan berkelanjutan melalui kerjasama
                                                lintas sektor.
                                            </h5>
                                        </div>
                                    </div>
                                    <div
                                        class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                        <div class="col-12 col-sm-2">
                                            <div class="resume-tab-img-container mx-auto mx-sm-0">
                                                <img src="{{asset('guests/img/tablogoOne.png')}}" alt="resume tab image">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-5 text-center text-sm-start">
                                            <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                                Nama Kandidat
                                            </h3>
                                            <h5 class="fw-400 line-height-6 secondary-black">
                                                Visi:
                                                Mewujudkan masyarakat inklusif dan berkelanjutan melalui inovasi dan
                                                kolaborasi.

                                                Misi:
                                                Memajukan potensi individu dan lingkungan melalui pendidikan yang
                                                holistik serta merangkul perkembangan berkelanjutan melalui kerjasama
                                                lintas sektor.
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end resume -->
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
