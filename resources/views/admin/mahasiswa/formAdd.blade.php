@extends('layouts.admin')

@section('content')

<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Add Mahasiswa</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/mahasiswa">Mahasiswa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Mahasiswa</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">

                <form class="custom-validation" method="POST" action="{{ route('mahasiswa.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control @error('name') has-error @enderror"  placeholder="name" value="{{ old('name') }}">
                        @error('name')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="nim">Nim</label>
                        <input type="number" id="nim" name="nim" class="form-control @error('nim') has-error @enderror"  placeholder="nim" value="{{ old('nim') }}">
                        @error('nim')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') has-error @enderror"  placeholder="password">
                        @error('password')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="role">Select Role (optional)</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">optional</option>
                            <option value="admin">Admin</option>
                        </select>
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