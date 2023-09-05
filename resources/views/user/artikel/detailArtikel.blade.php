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
                        {{ $artikel->name }}
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
                        <img class="single-blog-featured-img img-fluid" src="{{ asset('storage/'.$artikel->image) }}" alt="featured image">
                    </div>
                    <div class="single-page-blog-content-body">
                        <div>{!! $artikel->deskripsi !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
