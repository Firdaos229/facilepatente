@extends('main')

@section('title', 'Corsi - Facile Patente')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">
                Scopri i corsi disponibili per i nostri studenti
            </h1>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style">
                <div class="container">
                    <div class="sec-title4 text-center mb-45">
                        <h2 class="title black-color">Esplora i nostri corsi</h2>
                        <div class="new-desc">
                            Trovate il corso più adatto alle vostre esigenze di guida
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-3 col-md-6 grid-item filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('assets/images/courses/arabic-instructor-man-providing-driving-lessons-to-2023-11-27-05-11-49-utc.jpg') }}"
                                alt="" />
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="#">Corso di <br />
                                    guida</a>
                            </h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user">10 corsi</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="{{ route('course-detail') }}"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grid-item filter4 filter1">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('assets/images/courses/a3f0f79c30.jpg') }}" alt="" />
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="#">Codice della <br> strada</a>
                            </h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user">10 corsi</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="{{ route('course-detail') }}"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grid-item filter3 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('assets/images/courses/person-preparing-get-driver-license (3).jpg') }}"
                                alt="" />
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="#">Formazione continua</a>
                            </h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user">10 corsi</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="{{ route('course-detail') }}"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grid-item filter1 filter2">
                    <div class="courses-item mb-30">
                        <div class="img-part">
                            <img src="{{ asset('assets/images/courses/elderly-people-taking-training-in-driving-a-car-2023-11-27-05-02-47-utc.jpg') }}"
                                alt="" />
                        </div>
                        <div class="content-part">
                            <h3 class="title">
                                <a href="{{ route('course-detail') }}">Corso <br />Simulatore</a>
                            </h3>
                            <div class="bottom-part">
                                <div class="info-meta">
                                    <ul>
                                        <li class="user">10 corsi</li>
                                    </ul>
                                </div>
                                <div class="btn-part">
                                    <a href="{{ route('course-detail') }}"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Courses Section End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pb-100 md-pt-70 md-pb-70">
        <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style">
            <div class="container">
                <div class="sec-title4 text-center mb-45">
                    <h2 class="title black-color">
                        Superate l'esame di guida in un batter d'occhio !
                    </h2>
                    <div class="new-desc">
                        Trovate il corso più adatto alle vostre esigenze di guida
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="{{ asset('assets/images/about/pexels-introspectivedsgn-9846067.jpg') }}"
                            alt="About Image" />
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15">
                    <div class="sec-title">
                        <h2 class="title mb-17">Registrati ora !</h2>
                        <div class="bold-text mb-22">
                            Unitevi a Odriverr per un’esperienza di guida senza pari.
                        </div>
                        <div class="desc">
                            Il nostro team è composto da professionisti appassionati
                            pronti a guidarvi.
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

    <!-- Faq Section Start -->
    <div class="rs-faq-part style1 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-0 col-md-12">
                    <div class="img-part">
                        <img class="" src="{{ asset('assets/images/about/pexels-introspectivedsgn-9846067.jpg') }}"
                            alt="About Image" />
                    </div>
                </div>
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
            </div>
        </div>
    </div>
    <!-- faq Section Start -->

@endsection
