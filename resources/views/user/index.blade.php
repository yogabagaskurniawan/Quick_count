@extends('layouts.user')

@section('content')
<!-- start banner -->
<section class="home-banner position-relative" style="padding-top: 100px; padding-bottom: 50px">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="home-banner-wrapper row align-items-center">
                    <div class="col-12 col-lg-6 col-xl-7 home-banner-text-col position-relative">
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
                        <div class="banner-particle-one-container">
                            <img class="position-absolute banner-particle-one d-none d-lg-inline"
                                src="{{ asset('guests/img/particleOne.png') }}" alt="banner particle one">
                        </div>
                        <div class="banner-particle-two-container">
                            <img class="position-absolute banner-particle-two delay-one"
                                src="{{ asset('guests/img/particleTwo.png') }}" alt="banner particle two">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 text-center position-relative home-banner-img-col">
                        <div class="banner-particle-one-container">
                            <img class="position-absolute banner-particle-one d-lg-none"
                                src="{{ asset('guests/img/particleOne.png') }}" alt="banner particle one">
                        </div>
                        <img class="img-fluid position-relative z-index-10 home-banner-img" width="709" style="height: 600px" src="{{asset('guests/img/vivid-classes-at-the-university.gif')}}" alt="banner-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home-banner -->

<!-- start single blog banner -->
<section class="single-blog-contents" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details-wrapper">
                    <div class="section-heading-middle">
                        <div class="sub-heading d-flex align-items-center mx-auto">
                            <img src="{{ asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                            <p>My Kampus</p>
                        </div>
                        <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                            TENTANG UNISS
                        </h2>
                    </div>
                    <div class="single-page-blog-content-body">
                        <div class="blog-content-body-quotation mt-50">
                            <img class="blog-quotation-icon mb-30" src="{{ asset('guests/img/quotation.png')}}" alt="quotation icon">
                            <blockquote class="h4 line-height-6 fw-600 black-color mb-50 row-mobile-margin">
                                UNISS(Universitas Selamat Sri) adalah lembaga pendidikan tinggi yang berdedikasi
                                untuk memberikan pendidikan berkualitas tinggi dan pengalaman belajar
                                yang holistik bagi para mahasiswa. Terletak di lingkungan yang inspiratif dan modern,
                                kampus kami dirancang untuk mendorong pertumbuhan akademik, pribadi, dan profesional.
                            </blockquote>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end single blog banner -->
    
<!-- start event -->
<section class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blogs-wrapper">
                    <div class="section-heading-middle">
                        <div class="sub-heading d-flex align-items-center mx-auto">
                            <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                            <p>Event</p>
                        </div>
                        <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                            EVENT TERBARU
                        </h2>
                    </div>
                    <div class="blogs-container row-mobile-margin mt-50">
                        @forelse ($event as $event)
                            <div class="card p-0 blog-card">
                                <div class="img-overlay">
                                    <img src="{{ asset('storage/'.$event->image) }}" class="card-img-top img-fluid blog-card-img" alt="blog image" style="height: 210px">
                                </div>
                                <div class="card-body blog-card-body">
                                    @php
                                        $eventDate = \Carbon\Carbon::parse($event->tgl_mulai);
                                        $currentDate = now();
                                        $isEventStarted = $eventDate <= $currentDate;
                                    @endphp
                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        {{ \Carbon\Carbon::parse($event->tgl_mulai)->format('d F, Y H:i:s') }}
                                    </p>
                                    <h3 class="card-title h3 fw-600 line-height-3 black-color">{{ $event->name }}</h3>
                                    <a href="#" class="blog-card-btn blog-card-btn-event d-flex align-items-center mt-4 {{ $eventDate > now() ? 'disabled' : '' }}" data-event-slug="{{ $event->slug }}">
                                        <span class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Masuk</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        <div class="error-message fst-italic fw-bold {{ $eventDate > now() ? 'text-danger' : 'text-success' }}" style="display: none;"></div>
                                    </p>
                                </div>
                            </div>
                        @empty
                        <div class="col-lg-4 mr-3">
                            <p style="margin-left: 20px">Belum ada event terbaru!</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end event -->
<!-- start hasil event -->
<section class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blogs-wrapper">
                    <div class="section-heading-middle">
                        <div class="sub-heading d-flex align-items-center mx-auto">
                            <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                            <p>Hasil Event</p>
                        </div>
                        <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                            HASIL EVENT TERBARU
                        </h2>
                    </div>
                    <div class="blogs-container row-mobile-margin mt-50">
                        @forelse ($history as $history)
                            <div class="card p-0 blog-card">
                                <div class="img-overlay">
                                    <img src="{{ asset('storage/'.$history->image) }}" class="card-img-top img-fluid blog-card-img"
                                        alt="blog image">
                                </div>
                                <div class="card-body blog-card-body">
                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        {{ \Carbon\Carbon::parse($history->tgl_mulai)->format('d F, Y H:i:s') }}
                                    </p>                                    
                                    <h3 class="card-title h3 fw-600 line-height-3 black-color">{{ $history->name }}</h3>
                                    <a href="/hasil-vote/{{ $history->slug }}" class="blog-card-btn d-flex align-items-center mt-4">
                                        <span class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Lihat</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a> 
                                </div>
                            </div>
                        @empty
                        <div class="col-lg-4 mr-3">
                            <p style="margin-left: 20px">Belum ada hasil event terbaru!</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hasil event -->

<section class="partners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners-wrapper">
                    <div class="section-heading-middle">
                        <div class="sub-heading d-flex align-items-center mx-auto">
                            <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                            <p>Fakultas</p>
                        </div>
                        <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                            SEMUA FAKULTAS
                        </h2>
                    </div>
                    <div class="partner-list-container row-mobile-margin mt-50">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>TI</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>DKV</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>PSIKOLOGI</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>MANAJEMEN</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>HUKUM</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>SIPIL</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-card">
                                    <img class="text-center img-fluid partner-img" src="{{asset('guests/img/uniss.png')}}"
                                        alt="partner-image">
                                        <span>ILKOM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start hasil event -->
<section class="blogs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blogs-wrapper">
                    <div class="section-heading-middle">
                        <div class="sub-heading d-flex align-items-center mx-auto">
                            <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                            <p>Artikel</p>
                        </div>
                        <h2 class="black-color line-height-3 h2 text-uppercase text-center">
                            ARTIKEL TERBARU
                        </h2>
                    </div>
                    <div class="blogs-container row-mobile-margin mt-50">
                        @forelse ($artikel as $artikel)
                            <div class="card p-0 blog-card">
                                <div class="img-overlay">
                                    <img src="{{ asset('storage/'.$artikel->image) }}" class="card-img-top img-fluid blog-card-img"
                                        alt="blog image">
                                </div>
                                <div class="card-body blog-card-body">
                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        {{ \Carbon\Carbon::parse($artikel->created_at)->format('d F, Y H:i:s') }}
                                    </p>                                    
                                    <h3 class="card-title h3 fw-600 line-height-3 black-color">{{ $artikel->name }}</h3>
                                    <a href="/artikel/{{ $artikel->slug }}" class="blog-card-btn d-flex align-items-center mt-4">
                                        <span class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">Lihat</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a> 
                                </div>
                            </div>
                        @empty
                        <div class="col-lg-4 mr-3">
                            <p style="margin-left: 20px">Belum ada artikel terbaru!</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hasil event -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $(".blog-card").each(function() {
            var tglMulai = $(this).find(".blog-card-date").text();
            var currentDate = new Date();
            var eventDate = new Date(tglMulai);

            if (eventDate > currentDate) {
                var errorMessage = "Event belum dimulai.";
                $(this).find(".error-message").text(errorMessage).show();
                // Disable tombol jika event belum dimulai
                $(this).find(".blog-card-btn-event").addClass("disabled").css("pointer-events", "none");
            } else {
                var ongoingMessage = "Event masih berlangsung.";
                $(this).find(".error-message").text(ongoingMessage).show();
            }
        });

        $(".blog-card-btn-event").click(function(e) {
            e.preventDefault();

            var card = $(this).closest(".blog-card");
            var errorMessage = card.find(".error-message").text();

            if (errorMessage === "Event belum dimulai.") {
                alert("Event belum dimulai. Tunggu hingga event dimulai.");
            } else {
                var eventSlug = $(this).data("event-slug");
                var url = "/event/" + eventSlug;
                window.location.href = url;
            }
        });
    });
</script>
@endsection