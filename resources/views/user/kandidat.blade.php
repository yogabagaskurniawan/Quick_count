@extends('layouts.user')

@section('content')
<section class="inner-page-hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h2 class="h2 black-color fw-700 line-height-3 text-center">
                        Daftar Kandidat
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
                <div class="blogs-wrapper">
                    <div class="blogs-container row-mobile-margin mt-50">
                        @forelse ($kandidat as $kandidat)
                            <div class="card p-0 blog-card">
                                <div class="portfolio-massonary-items mix ui all position-relative">
                                    <img src="{{ asset('storage/'.$kandidat->image) }}" class="card-img-top img-fluid blog-card-img">
                                    <div class="portfolio-card-overlay w-100 position-absolute top-0">
                                    </div>
                                </div>    
                                <div class="card-body blog-card-body">
                                    <h3 class="card-title h3 fw-600 line-height-3 black-color">{{ $kandidat->name }}</h3>
                                    <a href="/user/detailevent">
                                        <div class="header-btn-wrapper mt-3">
                                            <a class="btn orange-btn btn_effect mb-2" style="font-size: 15px; padding: 8px 13px;" href="/kandidat/">
                                                <span class="z-1 position-relative">Pilih <i class="bi bi-check-lg"></i></span>
                                            </a>
                                            <a class="btn orange-btn btn_effect mb-2" style="font-size: 15px; padding: 8px 13px;" href="/detail-kandidat/{{ $kandidat->slug }}">
                                                <span class="z-1 position-relative">Detail Kandidat <i class="bi bi-info-circle"></i></span>
                                            </a>
                                        </div>
                                    </a>
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
@endsection