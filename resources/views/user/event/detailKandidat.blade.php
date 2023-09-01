@extends('layouts.user')

@section('content')

<section class="inner-page-hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h2 class="h2 black-color fw-700 line-height-3 text-center">
                        Detail Kandidat
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-140">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row g-3 g-lg-5 align-items-center">
                    <div class="about-image-col col-12 col-lg-6 text-center">
                        <div class="img-overlay mx-auto mx-lg-0">
                            <img class="img-fluid" src="{{asset('storage/'.$kandidat->image)}}" alt="about image">
                        </div>
                    </div>
                    <div class="about-text-col col-12 col-lg-6">
                        <div class="about-text-top">
                            <div class="section-heading">
                                <h2 class="black-color line-height-3 h2">
                                    {{ $kandidat->name }}
                                </h2>
                            </div>
                            <div class=" line-height-7 mt-20">
                                {!! $kandidat->deskripsi !!}    
                            </div>
                        </div>
                        <a class="btn btn_effect home-banner-btn orange-btn mt-50" href="/daftar-kandidat/{{ $kandidat->Event->slug }}">
                            <span class="position-relative z-1">Kembali <i class="bi bi-box-arrow-in-left"></i></span>  
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection