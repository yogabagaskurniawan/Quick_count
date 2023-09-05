@extends('layouts.user')

@section('content')
        <!-- end header -->
        <!-- start inner page hero section -->
        <section class="inner-page-hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-middle">
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
    </main>
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>

@endsection