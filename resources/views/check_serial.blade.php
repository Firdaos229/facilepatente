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
            <div class="rs-free-contact text-center p-8 rounded-lg shadow-lg w-full max-w-lg">
                <div class="sec-title3">
                    <h2 class="title white-color">Controlla il tuo numero di serie</h2>
                    <p>Verifica il tuo numero di serie per garantire l'autenticità della tua patente di guida e accedi alle
                        tue informazioni personali in modo sicuro.</p>
                </div>
                <form action="/check-serial" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-30 col-md-12">
                            <label for="serial_number">INSERISCI IL TUO NUMERO DI SERIE :</label>
                            <input type="text" id="serial_number" name="serial_number" class="input-field"
                                placeholder="Ex : NA325895500P" required>
                        </div>


                        <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <button class="readon green-banner mb-40" type="submit">Verifica</button>
                        </div>

                </form>
            </div>
        </div>


    </div>
@endsection
