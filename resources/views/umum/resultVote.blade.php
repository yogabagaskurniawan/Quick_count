@extends('layouts.user')

@section('content')

        <section class="inner-page-hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading-middle">
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
      
    </main>
    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>


@endsection
