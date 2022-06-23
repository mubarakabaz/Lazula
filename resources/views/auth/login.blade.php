@extends('layouts.app')

@section('content')
<div class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img
                                class="logo-icon me-2" src="{{ asset('back/images/mio-logo.png') }}" alt="logo"></a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">Log in</h2>
                    <div class="auth-form-container text-start">

                        <form method="POST" action="{{ route('login') }}" class="auth-form login-form">
                            @csrf
                            <div class="email mb-3">
                                <label class="sr-only" for="email">{{ __('Email Address') }}</label>
                                <input id="signin-email" name="email" type="email" class="form-control signin-email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!--//form-group-->
                            <div class="password mb-3">
                                <label class="sr-only" for="password">{{ __('Password') }}</label>
                                <input id="signin-password" name="password" type="password"
                                    class="form-control signin-password" placeholder="Password" required
                                    autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="RememberPassword"
                                                name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="RememberPassword">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <!--//col-6-->
                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Lupa Kata Sandi?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <!--//col-6-->
                                </div>
                                <!--//extra-->
                            </div>
                            <!--//form-group-->
                            <div class="text-center">
                                <button type="submit"
                                    class="btn app-btn-primary w-100 theme-btn mx-auto">{{ __('Login') }}</button>
                            </div>
                        </form>


                        @if (Route::has('register'))
                        <div class="auth-option text-center pt-5">Belum punya akun?
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                        @endif
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
                        <h5 class="mb-3 overlay-title">Belum Punya Akun?</h5>
                        <div> Silahkan Registrasi terlebih dahulu, atau klik link Registrasi. </div>
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
