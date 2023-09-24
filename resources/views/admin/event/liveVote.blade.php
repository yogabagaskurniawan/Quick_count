@extends('layouts.admin')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Hasil Voting {{ $event->name }}</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hasil Voting</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-3 ">
    <div class="col-lg-12">
        <h4>Total Voting Keseluruhan: <span id="total-votes-value">{{ $totalVotes }}</span> Votes</h4>
    </div>
    @foreach ($event->Kandidats as $kandidat)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <img class="img-thumbnail rounded me-2" alt="200x200" width="200" src="{{ asset('storage/'.$kandidat->image) }}" data-holder-rendered="true">
                        </div>
                    </div>
                    <h2>{{ $kandidat->name }}</h2>
                    <h4><span id="total-votes-kandidat-{{ $kandidat->slug }}">{{ $totalVotesKandidat[$kandidat->id] }}</span> Votes</h4>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> 
    {{-- live voting --}}
    <script>
        var eventSlug = "{{ $event->slug }}"; // Ambil slug dari sumber data
        var eventSource = new EventSource('/update-vote-count/' + eventSlug);
        eventSource.onmessage = function(event) {
            var data = JSON.parse(event.data);
            // Menggunakan data.totalVotes
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