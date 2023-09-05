@extends('layouts.user')

@section('content')

<section class="inner-page-hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <p class="p fw-400 line-height-7 black-color text-center">
                        <span class="secondary-black">Artikel</span>
                    </p>
                    <h2 class="h2 black-color fw-700 line-height-3 text-center">
                        Daftar Semua Artikel
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
                        @forelse ($artikels as $artikel)
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
                                <p style="margin-left: 20px">Belum ada hasil event terbaru!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mt-50">
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection