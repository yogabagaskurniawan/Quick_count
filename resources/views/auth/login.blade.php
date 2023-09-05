<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="" data-template="horizontal-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sign In</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset ('guests/css/core.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset ('guests/css/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset ('js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Login -->
                <div class="card p-2">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                    </div>
                    @endif
                    <!-- Logo -->
                    <!-- /Logo -->
                    <div class="card-body mt-2">
                        <h4 class="mb-2 fw-semibold">{{__('Login') }}</h4>
                        <p class="mb-4">Please sign-in to your account </p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if(session('intended_route'))
                            <input type="hidden" name="intended_route" value="{{ session('intended_route') }}">
                        @endif


                        <form id="formAuthentication" class="mb-3" action="{{ route('login')}}" method="POST">
                            @csrf
                            <div class="form-floating form-floating-outline mb-3">
                                <input id="nim" type="number" class="form-control" name="nim" value="{{ old('nim') }}" placeholder="NIM" required
                    autofocus>
                                <label for="nim">NIM</label>
                            </div>
                            <div class="mb-3">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating form-floating-outline">
                                            <input id="password" type="password" class="form-control" name="password"  autocomplete="current-password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                            <label for="password">{{ __('Password') }}</label>
                                        </div>
                                        <span class="input-group-text cursor-pointer"><i
                                                class="mdi mdi-eye-off-outline"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-warning d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Page JS -->
    <script src="{{asset ('js/pages-auth.js')}}"></script>
</body>

</html>