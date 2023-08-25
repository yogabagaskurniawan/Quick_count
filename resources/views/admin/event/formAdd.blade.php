@extends('layouts.admin')

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Add Event</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/event">Event</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Event</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <form class="custom-validation" method="POST" action="{{ route('event.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') has-error @enderror"  placeholder="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status">Select status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="aktif">Aktif</option>
                            <option value="non-aktif">Non Aktif</option>
                            <option value="delete">Delete</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="image" onchange="preview('.imageDemo', this.files[0])">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        <div class="col-md mt-3">
                            <img src="" alt="" class="img-preview img-fluid mb-3 col-sm-5 d-block imageDemo">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <form method="post">
                            <textarea id="elm1" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        </form>
                        @error('deskripsi')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
                <!-- end form -->
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection