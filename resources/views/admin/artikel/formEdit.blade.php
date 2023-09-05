@extends('layouts.admin')

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Edit Event</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/artikel">Artikel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Artikel</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <form class="custom-validation row g-3" method="POST" action="{{  route('artikel.update', $edit->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') has-error @enderror"  placeholder="name" value="{{ $edit->name ?? '' }}">
                        @error('name')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3 col-md-4">
                        <label for="status">Select status</label>
                        <select name="status"  class="form-select" aria-label="Default select example">
                            <option value="aktif" @if ($edit->status === 'aktif') selected @endif>Aktif</option>
                            <option value="non-aktif" @if ($edit->status === 'non-aktif') selected @endif>Non Aktif</option>
                            <option value="delete" @if ($edit->status === 'delete') selected @endif>delete</option>
                        </select>
                        @error('status')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-3 col-md-8">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') has-error @enderror" placeholder="image" onchange="preview('.imageDemo', this.files[0])">
                        @error('image')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                        <div class="col-md mt-3">
                            <input type="hidden" name="oldImage" value="{{ $edit->image }}">
                            @if ($edit->image)
                                <img src="{{ asset('storage/'.$edit->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block imageDemo">   
                            @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea id="elm1" name="deskripsi">{{ $edit->deskripsi }}</textarea>
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
            </div>
        </div>
    </div> 
</div> 
@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
@endsection