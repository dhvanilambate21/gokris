@extends('layouts.app')

@section('content')

<section class="login__page page__hero">
    <div class="prewiev__hero">
        <img src="{{ asset('backend/images/illustration-sign-in@3x.svg') }}" alt="Prewiev" />
        <div class="logo__adm">
            <img src="{{ asset('backend/images/Logo@3x.svg') }}" alt="" class="logo">
        </div>
    </div>
    <div class=" login__form form__hero">
        <div class="form__head">
            <img src="{{ asset('backend/images/Logo@3x.svg') }}">
            <h1 class="login__title">Sign in</h1>
        </div>
        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <p class="welcome__adm">Welcome to GoKrish! </p>
            <label class="input__hero" for="email">
                <input type="email" name="email" id="email" placeholder="Your email" required
                    class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror/>

                <span class="input__icon">
                    <img src="{{ asset('backend/images/mail.png') }}" alt="">
                </span>
            </label>
            <label class="input__hero password__input" for="password">
                <input type="password" name="password" id="password"
                    class="@error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password"/>
                                    @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                <span class="input__icon">
                    <img src="{{ asset('backend/images/password.png') }}" alt="">
                </span>
            </label>
            <button type="submit" class="submit__btn btn">Sign in</button>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="Forget__password">Forget Password? </a>
            @endif
        </form>
    </div>
</section>



<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection