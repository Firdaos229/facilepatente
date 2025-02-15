@extends('main')

@section('title', 'Tariffe')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/1.webp') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Le nostre tariffe competitive !</h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pt-50 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="{{ asset('assets/images/about/Catégorie.jpg') }}" alt="About Image" />
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15">
                    <div class="sec-title">
                        <h2 class="title">
                            Scegliete il piano più <br />
                            adatto a voi
                        </h2>
                        <div class="desc">
                            Scoprite i nostri piani per tutti i livelli di guida.
                        </div>
                        <div class="banner-btn wow fadeInUp mt-4" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon green-banner" href="#">Inizia il tuo viaggio -></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Categories Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pt-90 pb-100 md-pt-0 md-pb-0">
        <div class="container">
            <div class="sec-title4 text-center mb-45">
                <h2 class="title black-color">
                    Scegliete il piano più adatto a voi
                </h2>
                <div class="new-desc">
                    Scoprite i nostri piani per tutti i livelli di guida.
                </div>
            </div>

            <div class="pricing-container">
                @foreach ($pricings as $pricing)
                    <div class="pricing-card">
                        <div class="header">
                            <h2 class="title">{{ $pricing->title }}</h2>
                            <p class="subtitle">{{ $pricing->subtitle }}</p>
                        </div>
                        <div class="price"> €
                            <span>
                                {{ $pricing->price == floor($pricing->price) ? number_format($pricing->price, 0, ',', ' ') : number_format($pricing->price, 2, ',', ' ') }}
                            </span>
                        </div>
                        <ul class="features">
                            @php
                                // Si 'features' est une chaîne de caractères séparée par des virgules, on la convertit en tableau
                                $features = is_string($pricing->features)
                                    ? explode(',', $pricing->features)
                                    : $pricing->features;
                            @endphp

                            @if (count($features) > 0)
                                @foreach ($features as $feature)
                                    <!-- Suppression uniquement des crochets et guillemets -->
                                    <li>✔ {{ preg_replace('/[\'"\[\]]/', '', trim($feature)) }}</li>
                                    <hr />
                                @endforeach
                            @else
                                <li>Pas de caractéristiques disponibles.</li>
                            @endif
                        </ul>
                        <button class="cta-button">Iniziate subito !</button>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pb-100 md-pt-0 md-pb-0">
        <div class="container">
            <div class="sec-title4 text-center mb-45">
                <h2 class="title black-color">
                    Avete una domanda o un suggerimento ?
                </h2>
                <div class="new-desc">
                    Contattateci <a href="{{ route('contact') }}">qui</a> !
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section Start -->
    <div class="rs-faq-part style1 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                    <div class="main-part new-style">
                        <div class="title mb-20">
                            <h2 class="text-part">Domande frequenti</h2>
                        </div>
                        <div class="faq-content">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseOne">Qual è la
                                            differenza tra corsi online e corsi
                                            frontali ?</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            I corsi online offrono una maggiore flessibilità,
                                            mentre i corsi faccia a faccia consentono
                                            un’interazione diretta con l’istruttore.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                            aria-expanded="false">Quali tipi di corsi offrite ?</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Offriamo lezioni di guida pratica e sessioni di esame
                                            di guida.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                            aria-expanded="false">Quanto tempo occorre per ottenere una licenza ?</a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            Circa 7 giorni, a seconda della categoria scelta.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour"
                                            aria-expanded="false">Posso pagare in più rate ?</a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            Sì, offriamo opzioni di pagamento personalizzate
                                            pagabili in più rate.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padding-0 col-md-12">
                    <div class="img-part">

                        <img class="" src="{{ asset('assets/images/about/permis.webp') }}" alt="About Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq Section Start -->

@endsection
