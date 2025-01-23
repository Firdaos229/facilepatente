@extends('main')

@section('title', 'Mail-confirmation')

@section('content')
<section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
    <a href="{{ route('how-to-recover-password') }}" class="inline-block p-2 text-default-400 transition-all duration-300 hover:text-primary-500">
        <svg class="h-7 w-7" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
    </a>
    <div class="mx-auto my-5 flex h-20 w-20 items-center justify-center rounded-full bg-primary-500 p-2 text-white">
        <svg class="h-10 w-10 min-w-[40px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
            <path d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z"></path>
        </svg>
    </div>
    <h2 class="text-center text-2xl font-semibold text-default-600">
        We have sent you an email to {{ session('email') }}
    </h2>
    <p class="mt-6 text-center text-base">Enter the link in the email and recover your password.</p>
    <p class="mt-7 text-center text-base">Haven't received the email yet?</p>
    <p class="mt-5 text-center text-base">
        Contact our <a class="font-semibold text-primary-500 underline" href="contact.html">Help Center</a>
    </p>
    <p class="mt-16 flex items-center justify-center gap-2 text-default-300">
        <svg class="h-4 w-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
            <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"></path>
        </svg>
        Shipping system sure
    </p>
</section>
@endsection
