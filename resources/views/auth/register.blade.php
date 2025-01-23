@extends('main')

@section('title', 'S’inscrire')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger text-center mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="mx-auto max-w-[600px] px-4 py-10 sm:px-8 xl:px-4">
    <div class="mb-6 flex items-center justify-center gap-2">
        <img class="h-20 w-auto" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
    </div>
    <h2 class="mb-8 text-center text-2xl font-semibold text-default-500">
        Inscrivez-vous sur GadgetHaven
    </h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="relative mb-5 w-full">
            <input
                type="text"
                id="name"
                class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                placeholder=" "
                name="name"
                value="{{ old('name') }}"
                required
            />
            <label
                for="name"
                class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500"
            >
                Nom
            </label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="relative mb-5 w-full">
            <input
                type="email"
                id="email"
                class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                placeholder=" "
                name="email"
                value="{{ old('email') }}"
                required
            />
            <label
                for="email"
                class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500"
            >
                Email
            </label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="relative mb-5 w-full">
            <input
                type="number"
                id=""
                class="peer block w-full appearance-none rounded-lg border-0 bg-white px-2.5 pb-2.5 pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                placeholder=" "
                name="numero"
                value="{{ old('numero') }}"
                required
            />
            <label
                for="numero"
                class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500"
            >
                Numéro
            </label>
            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="toggle-input-container relative mb-5 w-full">
            <input
              type="password"
              id="password"
              name="password"
              class="toggle-input peer block w-full appearance-none rounded-lg border-0 bg-white pb-2.5 pl-[10px] pr-[50px] pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
              placeholder=" "
              required />
            <label
              for="password"
              class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
              Mot de Passe
            </label>
            <div
              class="button-toggle absolute inset-y-0 right-0 mr-4 flex cursor-pointer select-none items-center">
              <svg
                viewBox="0 0 24 24"
                width="24"
                height="24"
                stroke="currentColor"
                stroke-width="2"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="css-i6dzq1">
                <path
                  d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                <line x1="1" y1="1" x2="23" y2="23"></line>
              </svg>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="relative mb-5 w-full">
            <input
                type="password"
                id="password-confirm"
                class="toggle-input peer block w-full appearance-none rounded-lg border-0 bg-white pb-2.5 pl-[10px] pr-[50px] pt-5 text-sm text-default-500 shadow focus:outline-none focus:ring-0"
                placeholder=" "
                name="password_confirmation"
                required
            />
            <label
                for="password-confirm"
                class="z-1 pointer-events-none absolute left-2.5 top-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-default-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-primary-500">
           
                Confirmez le Mot de Passe
            </label>
        </div>

        <label class="flex select-none items-center gap-2">
            <input
                class="rounded text-primary-500 focus:ring-0 focus:ring-offset-0"
                type="checkbox"
            />
            <span class="my-6 text-xs text-slate-400">
                En m'inscrivant, j'accepte les
                <a class="text-primary-500 underline" href="#">politiques de confidentialité</a>
                .
              </span>
        </label>

        <button
            class="mt-5 w-full rounded-lg bg-primary-500 p-[14px] font-semibold text-white transition-all duration-300 hover:bg-primary-600"
            type="submit"
        >
        Créer un Compte
        </button>
    </form>

    
    <p class="mt-8 text-center">
        Vous avez un compte ?
        <a class="text-primary-500 underline" href="{{route('login')}}">Se connecter</a>
    </p>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!--  Validation du formulaire d'inscription avant soumisson  -->
<script>

//  script pour charger les indicatifs de telephones 
    const input = document.querySelector("#phone");
    const iti =  window.intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });


   // Gestion de la soumission du formulaire

document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault();

    // Vérifie la validité du formulaire
    if (this.checkValidity()) {
        // Valide le numéro de téléphone
        if (!iti.isValidNumber()) {
            alert("Le numéro de téléphone saisi n'est pas valide pour l'indicatif sélectionné !");
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
