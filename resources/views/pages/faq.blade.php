@extends('main')

@section('title', 'FAQ')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Avete domande ?</h1>
            <p>
                Ecco alcune domande frequenti. Se non trovate una risposta specifica
                al vostro problema, non esitate a porre la vostra domanda
                <a class="active" href="{{route('contact')}}">qui</a> !
            </p>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <div class="rs-faq-part orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="content-part mb-50 md-mb-30">
                <div class="title mb-40 md-mb-15">
                    <h2 class="text-part">Domande frequenti</h2>
                </div>
                <div id="accordion" class="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">Qual è la differenza tra corsi
                                online e corsi frontali ?</a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                I corsi online offrono una maggiore flessibilità, mentre i
                                corsi faccia a faccia consentono un’interazione diretta con
                                l’istruttore.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo"
                                aria-expanded="false">Offrite sconti per gli studenti ?</a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Sì, offriamo sconti speciali per gli studenti.
                                <a class="active" href="{{route('contact')}}">Contattateci</a> per
                                maggiori dettagli.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree"
                                aria-expanded="false">Quali metodi di pagamento accettate ?</a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Accettiamo pagamenti con carta di credito, PayPal e bonifico
                                bancario.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour"
                                aria-expanded="false">Quali tipi di corsi offrite ?</a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Offriamo lezioni di guida pratica e sessioni di esame di
                                guida.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseFive">Quali sono gli orari di
                                apertura ?</a>
                        </div>
                        <div id="collapseFive" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                I nostri uffici sono aperti dal lunedì al venerdì, dalle
                                9.00 alle 18.00.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false">
                                Quali documenti devo fornire ?</a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Documento d’identità valido, prova di residenza e foto
                                formato tessera.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven"
                                aria-expanded="false">Quanto tempo occorre per ottenere una licenza ?</a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Circa 7 giorni, a seconda della categoria scelta.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseEight" aria-expanded="true">Posso
                                pagare in più rate ?</a>
                        </div>
                        <div id="collapseEight" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                Sì, offriamo opzioni di pagamento personalizzate pagabili in
                                più rate.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">Questo servizio è
                                legale e riconosciuto ?</a>
                        </div>
                        <div id="collapseNine" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Sì, tutte le nostre licenze sono conformi alla normativa
                                italiana vigente.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
