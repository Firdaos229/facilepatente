{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('main')

@section('title', 'Recover-password')

@section('content')
<section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
    <a href="{{ route('index') }}" class="inline-block p-2 text-default-400 transition-all duration-300 hover:text-primary-500">
        <svg class="h-7 w-7" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
    </a>
    
    <div class="mx-auto my-5 flex h-20 w-20 items-center justify-center rounded-full bg-primary-500 p-2 text-white">
        <svg class="h-10 w-10 min-w-[40px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24">
            <path d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16ZM11 14V16H13V14H11ZM7 14V16H9V14H7ZM15 14V16H17V14H15Z"></path>
        </svg>
    </div>

    <h2 class="text-center text-2xl font-semibold text-default-600">First we will validate your email</h2>
    <p class="my-8 text-center text-base">Enter your email</p>

    @if (session('status'))
        <div class="alert alert-success text-center text-green-500" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="relative col-span-2 w-full">
            <input type="email" id="email" name="email" class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=" " />
            <label for="email" class="absolute left-2.5 top-4 -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">Email</label>
            
            @error('email')
                <span class="invalid-feedback text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button class="mx-auto mt-10 block whitespace-nowrap rounded-lg bg-primary-500 px-20 py-[14px] font-bold text-white transition-all duration-300 hover:bg-primary-600" type="submit">
            Send Password Reset Link
        </button>
    </form>

    <p class="mt-16 flex items-center justify-center gap-2 text-default-300">
        <svg class="h-4 w-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512">
            <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path>
        </svg>
        Shipping system sure
    </p>
</section>
@endsection
