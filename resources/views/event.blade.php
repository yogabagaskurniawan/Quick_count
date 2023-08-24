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

<!-- start banner -->
<section class="home-banner position-relative">
<div class="container-fluid custom-container">
    <div class="row">
        <div class="col-12">
            <div class="home-banner-wrapper row align-items-center">
                <div class="col-12 col-lg-6 col-xl-7 home-banner-text-col position-relative">
                    <div class="sub-heading d-flex align-items-center">
                        <p>I AM DESIGNER</p>
                    </div>
                    <div class="animate-heading">
                        <h1 class="black-color h1 home-one-title ah-headline">Universitas Selamat Sri <span
                            class="orange-color"><span class="ah-words-wrapper"> 
                                <b class="is-visible"> UNISS</b>
                            </span></span> 
                            <br>
                        </h1>
                    </div>
                    <p class="h5 line-height-7 mt-20 secondary-black fw-400">
                        UNISS(Universitas Selamat Sri) adalah lembaga pendidikan tinggi yang berdedikasi
                        untuk memberikan pendidikan berkualitas tinggi dan pengalaman belajar
                        yang holistik bagi para mahasiswa. Terletak di lingkungan yang inspiratif dan modern,
                        kampus kami dirancang untuk mendorong pertumbuhan akademik, pribadi, dan profesional.
                    </p>
                    <a class="btn_effect btn home-banner-btn orange-btn mt-50" href="resume.html"><span
                            class="z-1 position-relative">Daftar</span>
                    </a>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 text-center position-relative home-banner-img-col">
                    <div class="banner-particle-one-container">
                        <img class="position-absolute banner-particle-one d-lg-none"
                            src="{{asset('guests/img/particleOne.png')}}" alt="banner particle one">
                    </div>
                    <img class="img-fluid position-relative z-index-10 home-banner-img"
                        src="{{asset('guests/img/bannerImg.png')}}" alt="banner-image">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end home-banner -->

        <!-- start blog -->
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
                                    EVENT
                                </h2>
                            </div>
                            <div class="blogs-container row-mobile-margin mt-50">
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogOne.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">20 January,
                                            2023
                                        </p>
                                        <a href="/user/detailevent">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">EVENT 1.</h3>
                                        </a>
                                        <a href="/user/detailevent">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">masuk</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogTwo.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">15 January,
                                            2023
                                        </p>
                                        <a href="/user/detailevent">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">EVENT 2.</h3>
                                        </a>
                                        <a href="/user/detailevent">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Masuk</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card p-0 blog-card">
                                    <div class="img-overlay">
                                        <img src="{{asset('guests/img/blogThree.png')}}" class="card-img-top img-fluid blog-card-img"
                                            alt="blog image">
                                    </div>
                                    <div class="card-body blog-card-body">
                                        <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">08 January,
                                            2023
                                        </p>
                                        <a href="/user/detailevent">
                                            <h3 class="card-title h3 fw-600 line-height-3 black-color">EVENT 3.</h3>
                                        </a>
                                        <a href="/user/detailevent">
                                            <div class="blog-card-btn d-flex align-items-center mt-4">
                                                <span
                                                    class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Masuk</span>
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
        <!-- end blog -->

        <!-- start portfolio gallery -->
        {{-- <section class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="portfolio-wrapper">
                            <div class="section-heading-middle">
                                <div class="sub-heading d-flex align-items-center mx-auto">
                                    <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                                    <p>UNIVERSITY</p>
                                </div>
                                <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                                    LIHAT FAKULTAS KAMPUS
                                </h2>
                            </div>
                            <div class="mt-50 row-mobile-margin">
                                <div class="controls d-flex justify-content-center flex-wrap gap-1 gap-lg-4 mb-45">
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".all">All</button>
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".ui"></button>
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".branding">Fakultas Ekonomi</button>
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".graphic">Fakultas Teknologi Informasi</button>
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".app">Fakultas Hukum</button>
                                    <button type="button" class="control filter btn .outline-0 border-0 secondary-black"
                                        data-filter=".web">Fakultas Psikologi</button>
                                </div>
                                <div class="portfolio-massonary-container">
                                    <div class="portfolio-massonary-items mix ui all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioOne.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix graphic all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioTwo.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix ui graphic all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioThree.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix web all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioFour.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix app all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioFive.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix branding all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioSix.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix web all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioSeven.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-massonary-items mix app all position-relative">
                                        <img class="img-fluid" src="{{asset('guests/img/portfolioEight.png')}}" alt="portfolio-img">
                                        <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                        </div>
                                        <div
                                            class="d-flex w-100 position-absolute bottom-0 left-0 justify-content-center align-items-center">
                                            <div class="position-absolute mx-auto portfolio-card-overlay-contents">
                                                <p class="text-white fw-400 line-height-7">Graphic Design</p>
                                                <a href="portfolioDetails.html"
                                                    class="h4 text-white fw-600 line-height-3">
                                                    The best way to impress your web
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end portfolio gallery -->
        
        <!-- start contact -->
        {{-- <section class="home-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="home-contact-wrapper">
                            <div class="section-heading-middle">
                                <div class="sub-heading d-flex align-items-center mx-auto">
                                    <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                                    <p>My Contact</p>
                                </div>
                                <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                                    I WANT TO HEAR FROM YOU
                                </h2>
                            </div>
                            <div class="home-contact-info-container row row-mobile-margin mt-50 align-items-start">
                                <div class="col-12 col-md-8">
                                    <form>
                                        <div class="row g-4">
                                            <div class="col-12 col-sm-6">
                                                <input type="text" class="form-control home-contact-input"
                                                    placeholder="Your Name">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input type="email" class="form-control home-contact-input"
                                                    placeholder="Your Email">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input type="tel" class="form-control home-contact-input"
                                                    placeholder="Your phone">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input type="text" class="form-control home-contact-input"
                                                    placeholder="Subject">
                                            </div>
                                            <div class="col-12">
                                                <textarea placeholder="Message"
                                                    class="form-control home-contact-input"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn orange-btn btn_effect row-mobile-margin mt-30"><span
                                                            class="z-1 position-relative">Send Me
                                                            Message</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 col-md-4 home-contact-icon-container">
                                    <div class="row row-mobile-margin gy-3 gy-sm-0">
                                        <div class="col-12 d-flex align-items-center">
                                            <div class="mr-10">
                                                <div class="light-orange-bg-icon">
                                                    <i class="fa-solid fa-location-dot orange-color"></i>
                                                </div>
                                            </div>
                                            <div class="about-complete-project">
                                                <h4 class="fw-500 black-color h4">Address</h4>
                                                <p class="fw-400 secondary-black">
                                                    <a href="geo:37.7749,-122.4194">
                                                        202 Dog Hill Lane Beloit, KS 67420
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex align-items-center row-mobile-margin mt-50">
                                            <div class="mr-10">
                                                <div class="light-orange-bg-icon">
                                                    <i class="fa-solid fa-phone-volume orange-color"></i>
                                                </div>
                                            </div>
                                            <div class="about-years-experience">
                                                <h4 class="fw-500 black-color h4">Phone</h4>
                                                <p class="fw-400 secondary-black">
                                                    <a href="tel:+01589634755">+01589634755</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex align-items-center row-mobile-margin mt-50">
                                            <div class="mr-10">
                                                <div class="light-orange-bg-icon">
                                                    <i class="fa-solid fa-envelope orange-color"></i>
                                                </div>
                                            </div>
                                            <div class="about-years-experience">
                                                <h4 class="fw-500 black-color h4">Email</h4>
                                                <p class="fw-400 secondary-black">
                                                    <a href="mailto:credesign@gmail.com">
                                                        credesign@gmail.com
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end contact -->

        <!-- start footer -->
        <section class="footer">
            <div class="footer-wrapper">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-4 mt-5 mt-lg-0">
                                <div class="footer-col-one">
                                    <img src="{{asset('guests/img/LogoWhite.png')}}" class="footer-logo" alt="footer logo">
                                    <p class="p text-white line-height-7 mb-30 footer-col-one-texts">
                                        At vero eos et accusamus et iusto odio dign ducimus qui blanditiis praesentium
                                        volup deleniti atque corrupti quos dolores et molestias excepturi sint occaecati
                                    </p>
                                    <h3 class="h3 fw-500 line-height-3 text-white fw-500">
                                        credesign@gmail.com
                                    </h3>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-2 mt-5 mt-lg-0">
                                <h4 class="h4 fw-500 text-white">
                                    Explore Link
                                </h4>
                                <div class="footer-col-links">
                                    <ul class="footer-col-link-container">
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="about.html">About</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="resume.html">Resume</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white"
                                                href="portfolio.html">Portfolio</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="blog.html">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-2 mt-5 mt-lg-0">
                                <h4 class="h4 fw-500 text-white">
                                    My Services
                                </h4>
                                <div class="footer-col-links">
                                    <ul class="footer-col-link-container">
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="services.html">UI/UX
                                                Design</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="services.html">Mobile
                                                App</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="services.html">Graphics
                                                Design</a>
                                        </li>
                                        <li class="footer-link-item">
                                            <a class="fw-400 p line-height-7 text-white" href="services.html">Web
                                                Developer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 mt-5 mt-lg-0">
                                <h4 class="h4 fw-500 text-white">
                                    Follow me
                                </h4>
                                <div class="footer-social-media">
                                    <ul class="footer-social-container d-flex align-items-center mb-35">
                                        <li class="footer-social-item-2">
                                            <a href="https://www.facebook.com/">
                                                <div class="orange-bg-icon">
                                                    <i class="fa-brands fa-facebook-f text-white h4"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-item-2">
                                            <a href="https://twitter.com/">
                                                <div class="orange-bg-icon">
                                                    <i class="fa-brands fa-twitter text-white h4"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-item-2">
                                            <a href="https://dribbble.com/">
                                                <div class="orange-bg-icon">
                                                    <i class="fa-brands fa-dribbble text-white h4"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer-social-item-2">
                                            <a href="https://www.behance.net/">
                                                <div class="orange-bg-icon">
                                                    <i class="fa-brands fa-behance text-white h4"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-contact">
                                    <div class="footer-contact-item d-flex align-items-center mb-20">
                                        <i class="fa-solid fa-location-dot footer-contact-icon mr-10 orange-color"></i>
                                        <p class="p text-white line-height-7 fw-400">
                                            202 Dog Hill Lane Beloit,KS 67420
                                        </p>
                                    </div>
                                    <div class="footer-contact-item d-flex align-items-center mb-20">
                                        <i class="fa-solid fa-phone-volume footer-contact-icon mr-10 orange-color"></i>
                                        <p>
                                            <a class="p text-white line-height-7 fw-400" href="tel:1-800-915-6270">
                                                1-800-915-6270
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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