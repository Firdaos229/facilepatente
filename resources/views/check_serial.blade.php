@extends('main')

@section('title', 'Verifica')

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen mt-28 mb-28">
        <div class="col-lg-6 padding-0 col-md-12">

            <div id="form-messages" class="mb-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <div class="rs-free-contact text-center p-8 rounded-lg shadow-xl w-full max-w-lg bg-gradient-to-r from-blue-500 to-teal-400">
                <div class="sec-title3 mb-8">
                    <h2 class="title text-white font-semibold text-3xl">Controlla il tuo numero di serie</h2>
                    <p class="text-white opacity-80">Verifica il tuo numero di serie per garantire l'autenticità della tua patente di guida e accedi alle tue informazioni personali in modo sicuro.</p>
                </div>

                <form action="/check-serial" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-6 col-md-12">
                            <label for="serial_number" class="block text-lg font-semibold text-gray-800">INSERISCI IL TUO NUMERO DI SERIE :</label>
                            <input type="text" id="serial_number" name="serial_number" class="input-field mt-2 p-3 rounded-md w-full text-gray-700 placeholder-gray-400 border-2 border-transparent focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                                placeholder="Ex : NA325895500P" required>
                        </div>

                        <!-- Utilisation de Tailwind CSS pour centrer le bouton -->
                        <div class="flex justify-center">
                            <button class="readon green-banner mb-40 p-3 rounded-lg bg-gradient-to-r from-green-400 to-blue-500 text-white font-bold transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:bg-blue-500 focus:outline-none" type="submit">Verifica</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
