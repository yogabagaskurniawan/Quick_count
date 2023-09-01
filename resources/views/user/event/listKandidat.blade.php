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
                                    <div class="header-btn-wrapper mt-3 row">
                                        <form class="mb-2 col-lg-6 mb-md-2 vote-form" data-slug="{{ $kandidat->slug }}">
                                            @csrf
                                            <button type="button" class="btn orange-btn btn_effect w-100 vote-btn" style="font-size: 15px; padding: 8px 13px;">
                                                <span class="z-1 position-relative">Pilih <i class="bi bi-check-lg"></i></span>
                                            </button>
                                        </form>                                        
                                        <div class="col-lg-6 ">
                                            <a class="btn orange-btn btn_effect w-100" style="font-size: 15px; padding: 8px 13px;" href="/detail-kandidat/{{ $kandidat->slug }}">
                                                <span class="z-1 position-relative">Detail Kandidat <i class="bi bi-info-circle"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        @empty
                            <div class="col-lg-4 mr-3">
                                <p style="margin-left: 20px">Belum ada kandidat untuk event ini!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')

<script>
    // Tangani klik tombol "Pilih"
    $(".vote-btn").click(function() {
        var slug = $(this).closest(".vote-form").data("slug");

        // Tampilkan pesan konfirmasi SweetAlert2
        Swal.fire({
            title: 'Apakah Anda yakin ingin memilih kandidat ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, Pilih',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, kirimkan form (Anda dapat menambahkan AJAX di sini jika diperlukan)
                $.ajax({
                    url: "/kandidat/pilih/" + slug,
                    type: "POST",
                    data: { _token: "{{ csrf_token() }}" },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses',
                                text: response.message,
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message,
                            });
                        }
                    },
                    error: function(error) {
                        // Tanggapan dari server gagal
                        console.error(error); // Anda bisa menampilkan pesan error atau tindakan lain di sini
                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terjadi kesalahan saat memproses permintaan.',
                        });
                    }
                });
            }
        });
    });
</script>

@endsection