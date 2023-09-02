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
                        Daftar Semua Event
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
                        @forelse ($events as $event)
                            <div class="card p-0 blog-card">
                                <div class="img-overlay">
                                    <img src="{{ asset('storage/'.$event->image) }}" class="card-img-top img-fluid blog-card-img"
                                        alt="blog image">
                                </div>
                                <div class="card-body blog-card-body">
                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        {{ \Carbon\Carbon::parse($event->tgl_mulai)->format('d F, Y H:i:s') }}
                                    </p>                                    
                                    <h3 class="card-title h3 fw-600 line-height-3 black-color">{{ $event->name }}</h3>
                                    <a href="#" class="blog-card-btn d-flex align-items-center mt-4" data-event-slug="{{ $event->slug }}">
                                        <span class="blog-card-btn-text mr-10 .font-urbanist fw-600 line-height-7 orange-color">masuk</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>

                                    <p class="p font-urbanist line-height-7 blog-card-date fw-400 mb-20">
                                        <div class="error-message text-danger fst-italic fw-bold" style="display: none;"></div>
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
            <div class="col-12">
                <div class="mt-50">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

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
            }
        });

        $(".blog-card-btn").click(function(e) {
            e.preventDefault();

            var card = $(this).closest(".blog-card");
            var errorMessage = card.find(".error-message").text();

            if (errorMessage === "") {
                var eventSlug = $(this).data("event-slug"); // Misalnya, jika Anda menyimpan slug di atribut data-event-slug
                var url = "/event/" + eventSlug; // Bangun URL berdasarkan slug
                window.location.href = url;
            }
        });
    });
</script>
@endsection