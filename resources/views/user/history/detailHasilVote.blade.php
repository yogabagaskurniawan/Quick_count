@extends('layouts.user')

@section('content')

<section class="inner-page-hero-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <p class="p fw-400 line-height-7 black-color text-center">
                        <span class="secondary-black">Hasil Event</span>
                    </p>
                    <h2 class="h2 black-color fw-700 line-height-3 text-center">
                        {{ $event->name }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start resume -->
<section class="resume-four ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="resume-four-container">
                    <div class="row">
                        <div class="col-12 col-xl-5 resume-four-left">
                            <div class="section-heading">
                                <div class="sub-heading d-flex align-items-center">
                                    <img src="{{asset('guests/img/orangeDot.png')}}" alt="orange-dot">
                                    <p>Results</p>
                                </div>
                                <h2 class="black-color line-height-3 h2">
                                    Kandidat Vote
                                </h2>
                                <h4 id="vote-count" class="black-color line-height-3 h4 mt-3">
                                    Total Voting Keseluruhan: <span id="total-votes-value">{{ $totalVotes }}</span> Votes
                                </h4>                                 
                            </div>
                            <div class="resume-four-skill-grid mt-50 row-mobile-margin">
                            </div>
                        </div>
                    </div>
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
                            @foreach ($event->Kandidats as $kandidat)
                                <div class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                    <div class="col-12 col-lg-2">
                                        <div class="resume-tab-img-container mx-auto mx-lg-0">
                                            <img class="bio-img" src="{{ asset('storage/'.$kandidat->image) }}" alt="resume tab image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 text-center text-lg-start">
                                        <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                            {{ $kandidat->name }}
                                        </h3>
                                    </div>
                                    <div class="col-12 col-lg-5 text-center text-lg-end mt-3 mt-lg-0">
                                        <h4 class="resume-tab-time orange-color fw-600 line-height-5 mb-10">
                                            <span id="total-votes-kandidat-{{ $kandidat->slug }}">{{ $totalVotesKandidat[$kandidat->id] }}</span>  Votes
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="education" class="resume-tab-contents tab-pane fade">
                            @foreach ($event->Kandidats as $kandidat)
                                <div class="resume-tab-item bg-white pt-30 pb-30 pl-30 pr-30 row align-items-center mb-30">
                                    <div class="col-12 col-lg-2">
                                        <div class="resume-tab-img-container mx-auto mx-lg-0">
                                            <img class="bio-img" src="{{asset('storage/'.$kandidat->image) }}" alt="resume tab image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5 text-center text-lg-start">
                                        <h3 class="resume-tab-title fw-600 line-height-3 black-color mb-10">
                                            {{ $kandidat->name }}
                                        </h3>
                                        <h5 class="fw-400 line-height-6 secondary-black">
                                            <div>{!! $kandidat->deskripsi !!}</div>
                                        </h5>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end resume -->

@endsection

@section('script')
<script>
    var eventSlug = "{{ $event->slug }}"; // Ambil slug dari sumber data
    var eventSource = new EventSource('/update-vote-count/' + eventSlug);

    eventSource.onmessage = function(event) {
        var data = JSON.parse(event.data);

        // Menggunakan data.totalVotes sesuai kebutuhan
        document.getElementById('total-votes-value').textContent = data.totalVotes;

        // Iterasi melalui data.totalVotesKandidat
        for (var slug in data.totalVotesKandidat) {
            if (data.totalVotesKandidat.hasOwnProperty(slug)) {
                var votesForKandidat = data.totalVotesKandidat[slug];
                // Mengidentifikasi elemen dengan slug dan memperbarui kontennya
                var elementId = "total-votes-kandidat-" + slug;
                document.getElementById(elementId).textContent = votesForKandidat;
            }
        }
    };

</script>
@endsection