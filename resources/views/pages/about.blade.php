@extends('main')

@section('title', 'Di')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Su di noi !</h1>
            <p>Il nostro team dedicato e professionale è qui per aiutarvi !</p>
            <p>Scoprite chi siamo !</p>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Counter Section Start -->
    <div id="rs-about" class="rs-about style3 pt-100 md-pt-70">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-4 lg-pr-0 md-mb-30">
                    <div class="about-intro">
                        <div class="sec-title">
                            <div class="sub-title orange">Scoprire Odriverr</div>
                            <div class="desc big">
                                Scoprite di più sulla nostra missione di fornire corsi di
                                guida di alta qualità per garantire la vostra sicurezza
                                sulla strada.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-83 md-pl-15">
                    <div class="row rs-counter couter-area">
                        <div class="col-md-4 sm-mb-30">
                            <div class="counter-item one">
                                <h2 class="number rs-count plus">5,000</h2>
                                <h4 class="title mb-0">
                                    Studenti <br />
                                    formati
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4 sm-mb-30">
                            <div class="counter-item two">
                                <h2 class="number rs-count">10</h2>
                                <h4 class="title mb-0">Anni di esperienza</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter-item three">
                                <h2 class="number rs-count percent">99</h2>
                                <h4 class="title mb-0">Soddisfazione del cliente</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- About Section Start -->
    <div class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class=""
                            src="{{ asset('assets/images/about/germany-stuttgart-business-people-having-discuss-2024-09-22-16-27-59-utc.jpg') }}"
                            alt="About Image" />
                    </div>
                    <ul class="nav nav-tabs histort-part" id="myTab" role="tablist">
                        <li class="nav-item tab-btns single-history">
                            <a class="nav-link tab-btn active" id="about-history-tab" data-toggle="tab"
                                href="#about-history" role="tab" aria-controls="about-history"
                                aria-selected="true"><span class="icon-part"><i
                                        class="flaticon-banknote"></i></span>Valori</a>
                        </li>
                        <li class="nav-item tab-btns single-history">
                            <a class="nav-link tab-btn" id="about-mission-tab" data-toggle="tab" href="#about-mission"
                                role="tab" aria-controls="about-mission" aria-selected="false"><span
                                    class="icon-part"><i class="flaticon-flower"></i></span>Storia</a>
                        </li>
                    </ul>
                </div>
                <div class="offset-lg-1"></div>
                <div class="col-lg-5">
                    <div class="tab-content tabs-content" id="myTabContent">
                        <div class="tab-pane tab fade show active" id="about-history" role="tabpanel"
                            aria-labelledby="about-history-tab">
                            <div class="sec-title mb-25">
                                <h2 class="title">I nostri valori</h2>
                                <div class="desc">
                                    In Odriverr diamo valore all’integrità, all’eccellenza e
                                    alla dedizione nel fornire un’eccellente formazione ai
                                    conducenti.
                                </div>
                            </div>
                            <div class="tab-img">
                                <img class=""
                                    src="{{ asset('assets/images/about/customer-service-and-call-centre-operator-woman-2023-11-27-05-26-55-utc.jpg') }}"
                                    alt="Tab Image" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                            <div class="sec-title mb-25">
                                <h2 class="title">La nostra storia</h2>
                                <div class="desc">
                                    Fin dalla nostra creazione, la nostra missione è stata
                                    quella di trasformare le lezioni di guida con metodi
                                    efficaci e coinvolgenti.
                                </div>
                            </div>
                            <div class="tab-img">
                                <img class=""
                                    src="{{ asset('assets/images/about/customer-service-operator-2023-11-27-05-09-45-utc.jpg') }}"
                                    alt="Tab Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intro Info Tabs-->
            <div class="intro-info-tabs"></div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
    <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
        <div class="container">
            <div class="sec-title mb-50 md-mb-30">
                <div class="sub-title orange">Incontra il nostro team !</div>
                <h6 class="title mb-0">
                    Il nostro team è composto da professionisti appassionati e
                    determinati a fornirvi la migliore formazione possibile.
                </h6>
            </div>
            <div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30"
                data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false"
                data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                data-md-device-nav="true" data-md-device-dots="false">
                <div class="team-item">
                    <img src="{{ asset('assets/images/team/carines.jpg') }}" alt="" />
                    <div class="content-part">
                        <h4 class="name"><a href="#">Competenza</a></h4>
                        <p class="designation">
                            I nostri istruttori sono certificati e hanno una vasta
                            esperienza nell'insegnamento della guida.
                        </p>
                    </div>
                </div>
                <div class="team-item">
                    <img src="{{ asset('assets/images/team/2.jpg') }}" alt="" />
                    <div class="content-part">
                        <h4 class="name"><a href="#">Pazienza</a></h4>
                        <p class="designation">
                            Crediamo nell'apprendimento paziente e nella personalizzazione
                            di ogni studente.
                        </p>
                    </div>
                </div>
                <div class="team-item">
                    <img src="{{ asset('assets/images/team/3.jpg') }}" alt="" />
                    <div class="content-part">
                        <h4 class="name"><a href="#">Sicurezza</a></h4>
                        <p class="designation">
                            La sicurezza è la nostra priorità assoluta e ci assicuriamo
                            che ogni studente sia pronto per la strada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- CTA Section Start -->
    <div class="rs-cta">
        <div class="cta-img">
            <img src="{{ asset('assets/images/cta/cta-bg.jpg') }}" alt="" />
        </div>
        <div class="cta-content text-center">
            <div class="sec-title mb-40 md-mb-20 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <h2 class="title mb-16 md-mb-10">Partecipa con noi !</h2>
                <div class="desc">
                    In Odriverr ci impegniamo a fornirvi una formazione alla guida
                    sicura ed efficace. Unitevi a noi per iniziare il vostro viaggio
                    verso l’indipendenza sulla strada.
                </div>
            </div>
            <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                <a class="readon2" href="#">Scopri i nostri servizi !</a>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Partner Start -->
    <div class="rs-partner pt-100 pb-100 md-pb-70">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"
                data-md-device-nav="true" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/DHL.png') }}"
                            alt="" /></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/Poste.png') }}"
                            alt="" /></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/pngegg (50).png') }}"
                            alt="" /></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/pngegg (49).png') }}"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Partner End -->

@endsection
