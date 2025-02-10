@extends('main')

@section('title', 'Se Connecter')

@section('content')

<section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
  <div class="mb-6 flex items-center justify-center gap-2">
    <img class="h-20 w-auto" src="{{ asset('assets/images/logo 1.png') }}" alt="logo" />
  </div>
  <h2 class="mb-8 text-center text-2xl font-semibold text-default-600">
    Connectez-vous !
  </h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <!-- Email Input -->
    <div class="relative mb-5 w-full">
      <input
        id="email"
        type="email"
        name="email"
        value="{{ old('email') }}"
        class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
        placeholder=" "
        required
        autofocus
      />
      <label for="email"
        class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
        Email
      </label>
      @error('email')
        <span class="invalid-feedback text-red-500" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <!-- Password Input -->
    <div class="relative mb-5 w-full">
      <input
        id="password"
        type="password"
        name="password"
        class="toggle-input peer block w-full appearance-none rounded-lg border-0 bg-white pb-2.5 pl-[10px] pr-[50px] pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
        placeholder=" "
        required
      />
      <label for="password"
        class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
        Mot de Passe
      </label>
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
    <div class="mb-4 flex items-center justify-between">
      <div class="form-check">
        <input
          id="remember"
          type="checkbox"
          name="remember"
          class="form-check-input"
          {{ old('remember') ? 'checked' : '' }}
        />
        <label for="remember" class="form-check-label">
          {{ __('Se Rappeler de moi') }}
        </label>
      </div>
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="text-sm text-primary-500">
          {{ __('Mot de Passe oublié?') }}
        </a>
      @endif
    </div>

    <!-- Login Button -->
    <button
      type="submit"
      class="mt-5 w-full rounded-lg bg-primary-500 p-[14px] font-semibold text-white transition-all duration-300 hover:bg-primary-600"
    >
    Se connecter
    </button>
  </form>

  <p class="mt-8 text-center">
    Vous n'avez pas encore de compte ?
    <a class="text-primary-500 underline" href="{{route('register')}}">S'inscrire</a>
  </p>
  {{-- <p class="mt-8 text-center">
    Did you forget your password?
    <a class="text-primary-500 underline" href="{{route('recover-password')}}">
      Recover Password
    </a>
  </p> --}}
</section>

@endsection
