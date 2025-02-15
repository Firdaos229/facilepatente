@extends('main')

@section('title', 'Registro')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/1.webp') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color padding">
            <h1 class="page-title white-color">Registro !</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    @if ($errors->any())
        <div class="alert alert-danger text-center mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
                <h2 class="mb-8 text-center text-2xl font-semibold text-default-500">
                    Registro
                </h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="relative mb-5 w-full">
                        <input type="text" id="name"
                            class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                            placeholder=" " name="name" value="{{ old('name') }}" required />
                        <label for="name"
                            class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
                            Nome
                        </label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="relative mb-5 w-full">
                        <input type="email" id="email"
                            class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                            placeholder=" " name="email" value="{{ old('email') }}" required />
                        <label for="email"
                            class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
                            E-mail
                        </label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="relative mb-5 w-full">
                        <input type="number" id=""
                            class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                            placeholder=" " name="numero" value="{{ old('numero') }}" required />
                        <label for="numero"
                            class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
                            Telefono
                        </label>
                        @error('numero')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="toggle-input-container relative mb-5 w-full">
                        <input type="password" id="password" name="password"
                            class="toggle-input peer block w-full appearance-none rounded-lg border-0 bg-white pb-2.5 pl-[10px] pr-[50px] pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                            placeholder=" " required />
                        <label for="password"
                            class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
                            Password
                        </label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="relative mb-5 w-full">
                        <input type="password" id="password-confirm"
                            class="toggle-input peer block w-full appearance-none rounded-lg border-0 bg-white pb-2.5 pl-[10px] pr-[50px] pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                            placeholder=" " name="password_confirmation" required />
                        <label for="password-confirm"
                            class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">

                            Conferma password
                        </label>
                    </div>

                    <label class="flex select-none items-center gap-2">
                        <input class="rounded text-primary-500 focus:ring-0 focus:ring-offset-0" type="checkbox" />
                        <span class="my-6 text-xs text-slate-400">
                            Registrandomi accetto la
                            <a class="text-primary-500 underline" href="{{ route('politique') }}">politiche sulla
                                privacy</a>
                            .
                        </span>
                    </label>
                    <div class="form-btn">
                        <input class="readon submit-requset" type="submit" value=" Creare un account !" />
                    </div>
                </form>


                <p class="mt-8 text-center">
                    Hai un conto?
                    <a class="text-primary-500 underline" href="{{ route('login') }}">Login</a>
                </p>
            </section>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!--  Validation du formulaire d'inscription avant soumisson  -->
    <script>
        //  script pour charger les indicatifs de telephones 
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });


        // Gestion de la soumission du formulaire

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Vérifie la validité du formulaire
            if (this.checkValidity()) {
                // Valide le numéro de téléphone
                if (!iti.isValidNumber()) {
                    alert("Il numero di telefono inserito non è valido per il prefisso selezionato!");
                    return; // Arrête la soumission du formulaire si le numéro n'est pas valide
                }

                this.submit();
            } else {
                // Si le formulaire n'est pas valide, affiche les messages d'erreur de validation
                this.reportValidity();
            }
        });
    </script>

@endsection
