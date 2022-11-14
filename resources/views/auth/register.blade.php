@extends('layouts.app')

@section('content')

<div class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img
                                class="logo-icon me-2" src="{{ asset('back/images/mio-logo.png') }}" alt="logo"></a>
                    </div>
                    <h2 class="auth-heading text-center mb-4">Registrasi</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form method="POST" action="{{ route('register') }}" class="auth-form auth-signup-form">
                            @csrf
                            <div class="name mb-3">
                                <label class="sr-only" for="name">Nama Lengkap</label>
                                <input id="name" name="name" type="text"
                                    class="form-control signup-name @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" placeholder="Nama Lengkap" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email">{{ __('Email Address') }}</label>
                                <input id="email" name="email" type="email" class="form-control signup-email"
                                    placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password">{{ __('Password') }}</label>
                                <input id="signup-password" name="password" type="password" required autocomplete="new-password"
                                    class="form-control signup-password @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="password-confirm mb-3">
                            <label class="sr-only" for="password-confirmed">{{ __('Konfirmasi Password') }}</label>
                            <input id="signup-password" class="form-control signup-password" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
                            </div>
                            <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                    <label class="form-check-label" for="RememberPassword">
                                        Saya Setuju dengan <a href="#" class="app-link">Ketentuan Layanan</a> dan <a
                                            href="#" class="app-link">Kebijakan Privasi Mubarakabaz</a>.
                                    </label>
                                </div>
                            </div>
                            <!--//extra-->

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">{{ __('Register') }}</button>
                            </div>
                        </form>
                        <!--//auth-form-->

                        <div class="auth-option text-center pt-2">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto"
                                style="background-color: #00C2CB;">Log In</button>

                        </div>
                    </div>
                    <!--//auth-form-container-->



                </div>
                <!--//auth-body-->

            </div>
            <!--//flex-column-->
        </div>
        <!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">Sudah Punya Akun?</h5>
                        <div>Silahkan klik tombol Log In untuk masuk ke akun anda.</div>
                    </div>
                </div>
            </div>
            <!--//auth-background-overlay-->
        </div>
        <!--//auth-background-col-->

    </div>
    <!--//row-->
</div>

@endsection
