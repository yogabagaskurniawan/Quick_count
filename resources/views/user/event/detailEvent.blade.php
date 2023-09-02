@extends('layouts.user')

@section('content')

<section class="inner-page-hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <p class="p fw-400 line-height-7 black-color text-center">
                        <span class="secondary-black">Event</span>
                    </p>
                    <h2 class="h2 black-color fw-700 line-height-3 text-center">
                        {{ $event->name }}
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
                <div class="blog-details-wrapper">
                    <div class="single-blog-featured-img-container row-mobile-margin mt-50 text-center mb-5">
                        <img class="single-blog-featured-img img-fluid" src="{{ asset('storage/'.$event->image) }}" alt="featured image">
                    </div>
                    <div class="single-page-blog-content-body">
                        <div>{!! $event->deskripsi !!}</div>
                    </div>
                        <div class="col-12 mt-5">
                            <a class="btn orange-btn btn_effect voting-btn" href="/daftar-kandidat/{{ $event->slug }}">
                                <span class="z-1 position-relative">Yuk Voting Sekarang <i class="bi bi-box-arrow-in-right"></i></span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
