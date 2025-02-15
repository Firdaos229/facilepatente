@extends('main')

@section('title', 'Login')

@section('content')
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="{{ asset('assets/images/breadcrumbs/1.webp') }}" alt="Breadcrumbs Image" />
    </div>
    <div class="breadcrumbs-text white-color padding">
        <h1 class="page-title white-color">LOGIN !</h1>
    </div>
</div>
<!-- Breadcrumbs End -->

<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
            <h2 class="mb-8 text-center text-2xl font-semibold text-default-600">
                LOGIN !
            </h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Input -->
                <div class="relative mb-6 w-full text-left">
                    <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">
                        E-mail
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 shadow-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300"
                        placeholder="La tua email" required autofocus />
                    @error('email')
                        <span class="invalid-feedback text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="relative mb-6 w-full text-left">
                    <label for="password" class="block text-lg font-semibold text-gray-700 mb-2">
                        Password
                    </label>
                    <input id="password" type="password" name="password"
                        class="toggle-input peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 shadow-md focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-all duration-300"
                        placeholder="La tua password" required />
                    @error('password')
                        <span class="invalid-feedback text-red-500" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- Toggle Password Visibility -->
                    <div class="button-toggle absolute inset-y-0 right-0 mr-4 flex cursor-pointer select-none items-center">
                    </div>
                </div>

                <!-- Remember Me Checkbox -->
                <div class="mb-6 flex items-center justify-between">
                    <div class="form-check">
                        <input id="remember" type="checkbox" name="remember" class="form-check-input"
                            {{ old('remember') ? 'checked' : '' }} />
                        <label for="remember" class="form-check-label text-sm text-gray-700">
                            Ricordati di me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-primary-500 hover:text-primary-600">
                            Hai dimenticato la password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div class="form-btn">
                    <input class="readon submit-requset" type="submit" value="Login !" />
                </div>
            </form>

            <p class="mt-8 text-center text-sm">
                Non hai ancora un account?
                <a class="text-primary-500 underline hover:text-primary-600" href="{{ route('register') }}">Registro</a>
            </p>
        </section>
    </div>
</div>
@endsection
