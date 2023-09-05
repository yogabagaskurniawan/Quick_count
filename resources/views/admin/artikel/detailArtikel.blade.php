@extends('layouts.admin')

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Detail Artikel</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/artikel">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Artikel</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-5">
                    <img src="{{ asset('storage/'.$artikel->image) }}" class="img-fluid" alt="Responsive image" style="max-width:70%">
                </div>
                <h1 class=" text-center mb-5">{{ $artikel->name }}</h1>
                <div>
                    {!! $artikel->deskripsi !!}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection