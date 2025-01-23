@extends('main')

@section('title', 'Politica')

@section('content')

    <nav
      class="container mx-auto my-10 flex flex-wrap items-center gap-2 px-4 sm:px-8 xl:px-4">
      <div class="flex items-center gap-2">
        <a href="{{route('index')}}">
          <svg
            class="h-5 w-5 text-primary-500"
            stroke="currentColor"
            fill="currentColor"
            stroke-width="0"
            viewBox="0 0 576 512"
            height="200px"
            width="200px"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path>
          </svg>
        </a>
        <svg
          stroke="currentColor"
          fill="none"
          stroke-width="2"
          viewBox="0 0 24 24"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-4 w-4 text-slate-500"
          height="1em"
          width="1em"
          xmlns="http://www.w3.org/2000/svg">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </div>
      <div class="flex items-center gap-2">
        <a class="pointer-events-none text-slate-400" href="#">POLITICA SULLA RISERVATEZZA</a>
      </div>
    </nav>
  
    <section class="container mx-auto my-10 px-4 sm:px-8 xl:px-4">
      <div class="my-16 grid grid-cols-12 gap-8">
        <div class="col-span-12 lg:col-span-7">
          <div
            class="mb-8 flex items-center justify-between border-b-[3px] pb-2">
            <h5
              class="relative  font-bold text-default-600 after:absolute after:-bottom-[11px] after:left-0 after:h-[3px] after:w-full after:bg-primary-500 after:content-['']">
              {{$footer->politique_de_confidentialite ?? ''}}
            </h5>
          </div>
          

        </div>
  
      </div>
    </section>

@endsection