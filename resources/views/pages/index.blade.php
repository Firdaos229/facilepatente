@extends('main')

@section('title', 'Casa')

@section('content')

    <!-- Banner Section Start -->
    <div id="rs-banner" class="rs-banner style10">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-60 order-last">
                    <div class="img-part">
                        <img src="{{ asset('assets/images/banner/home12/(1).webp') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 pr-0">
                    <div class="banner-content">
                        <div class="sl-sub-titleHome wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                            Semplificare il processo di conseguimento della patente di
                            guida in Italia. Soluzioni su misura, veloci e affidabili per
                            tutti, anche per gli stranieri.
                        </div>
                        <h1 class="sl-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms">
                            Ottenere la licenza express
                        </h1>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon green-banner" href="{{route('tarif')}}">Scoprite le nostre offerte !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Partner Start -->
    <div class="rs-partner style2 pt-100 md-pt-70">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false"
                data-md-device-dots="false">
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/DHL.png') }}" alt="" /></a>
                </div>
                <div class="partner-item">
                    <a href="#"><img src="{{ asset('assets/images/partner/style3/Poste.png') }}" alt="" /></a>
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
    <!-- Partner End -->

    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services home12-style">
        <div class="container">
            <div class="sec-title4 text-center mb-50">
                <div class="sub-title">Vantaggi di Odriverr</div>
                <h2 class="title purple-color">
                    Il vostro successo, la nostra priorità
                </h2>
                <div class="new-desc">
                    Scoprite come i nostri corsi innovativi possono semplificare il
                    vostro apprendimento della guida.
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 md-mb-30">
                    <div class="services-item">
                        <div class="services-image">
                            <div class="image-part">
                                <img src="{{ asset('assets/images/services/home12/1.jpg') }}" alt="" />
                            </div>
                            <div class="services-text">
                                <div class="services-title">
                                    <h2 class="title">Corsi su misura</h2>
                                </div>
                                <p class="text">
                                    Corsi personalizzati in base ai vostri ritmi e alle vostre
                                    esigenze specifiche.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 md-mb-30">
                    <div class="services-item">
                        <div class="services-image">
                            <div class="image-part">
                                <img src="{{ asset('assets/images/services/home12/2.jpg') }}" alt="" />
                            </div>
                            <div class="services-text">
                                <div class="services-title">
                                    <h2 class="title">Orario di lavoro flessibile</h2>
                                </div>
                                <p class="text">
                                    Pianificate le lezioni in base al vostro <br />
                                    orario.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services-item">
                        <div class="services-image">
                            <div class="image-part">
                                <img src="{{ asset('assets/images/services/home12/3.jpg') }}" alt="" />
                            </div>
                            <div class="services-text">
                                <div class="services-title">
                                    <h2 class="title">Supporto continuo</h2>
                                </div>
                                <p class="text">
                                    Accedete al supporto online per tutte le vostre domande.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Categories Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses main-home home12-style pt-90 pb-100 md-pt-0 md-pb-0">
        <div class="container">
            <div class="sec-title4 text-center mb-45">
                <div class="sub-title">Tariffe</div>
                <h2 class="title black-color">I nostri servizi</h2>
                <div class="new-desc">
                    Scoprite le nostre offerte e trovate quella più adatta a voi.
                </div>
            </div>
            <div class="pricing-container">
                <div class="pricing-card">
                    <div class="header">
                        <h2 class="title">Licenza AM</h2>

                        <p class="subtitle">Ottenere rapidamente la licenza AM</p>
                    </div>
                    <div class="price">€ <span>499</span></div>
                    <ul class="features">
                        <li>✔ 5 lezioni pratiche</li>
                        <hr />
                        <li>✔ Accesso al codice di condotta</li>
                        <hr />
                        <li>✔ Assistenza prioritaria</li>
                    </ul>
                    <button class="cta-button">Iniziate subito !</button>
                </div>
                <div class="pricing-card">
                    <div class="header">
                        <h2 class="title">Licenza A1</h2>
                        <p class="subtitle">Ottenere rapidamente la licenza A1</p>
                    </div>
                    <div class="price">€ <span>499</span></div>
                    <ul class="features">
                        <li>✔ 5 lezioni pratiche</li>
                        <hr />
                        <li>✔ Accesso al codice di condotta</li>
                        <hr />
                        <li>✔ Assistenza prioritaria</li>
                    </ul>
                    <button class="cta-button">Iniziate subito !</button>
                </div>
                <div class="pricing-card">
                    <div class="header">
                        <h2 class="title">Licenza A2</h2>
                        <p class="subtitle">Ottenere rapidamente la licenza A2</p>
                    </div>
                    <div class="price">€ <span>499</span></div>
                    <ul class="features">
                        <li>✔ 5 lezioni pratiche</li>
                        <hr />
                        <li>✔ Accesso al codice di condotta</li>
                        <hr />
                        <li>✔ Assistenza prioritaria</li>
                    </ul>
                    <button class="cta-button">Iniziate subito !</button>
                </div>
                <div class="pricing-card">
                    <div class="header">
                        <h2 class="title">Licenza A</h2>
                        <p class="subtitle">Ottenere rapidamente la licenza A</p>
                    </div>
                    <div class="price">€ <span>499</span></div>
                    <ul class="features">
                        <li>✔ 5 lezioni pratiche</li>
                        <hr />
                        <li>✔ Accesso al codice di condotta</li>
                        <hr />
                        <li>✔ Assistenza prioritaria</li>
                    </ul>
                    <button class="cta-button">Iniziate subito !</button>
                </div>
            </div>

            <div class="col-lg-12 text-center pt-45">
                <a class="readon green-btn" href="{{ route('tarif') }}">Vedi di più... </a>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Choose Section Start -->
    <div class="why-choose-us style3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 js-tilt md-mb-40">
                    <div class="img-part">
                        <img src="{{ asset('assets/images/choose/home12/Bureau.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="sec-title3 mb-30">
                        <h2 class="title new-title margin-0 pb-15">
                            Perché scegliere noi ?
                        </h2>
                        <div class="new-desc">
                            Scoprite il nostro approccio unico per aiutarvi a superare
                            l’esame di guida con sicurezza.
                        </div>
                    </div>
                    <div class="services-part mb-20">
                        <div class="services-icon">
                            <span class="check-icon">✔</span>
                        </div>
                        <div class="services-text">
                            <p class="services-txt">Supporto amministrativo completo</p>
                        </div>
                    </div>
                    <div class="services-part mb-20">
                        <div class="services-icon">
                            <span class="check-icon">✔</span>
                        </div>
                        <div class="services-text">
                            <p class="services-txt">Assistenza personalizzata</p>
                        </div>
                    </div>
                    <div class="services-part">
                        <div class="services-icon">
                            <span class="check-icon">✔</span>
                        </div>
                        <div class="services-text">
                            <p class="services-txt">
                                Pagamento sicuro con diverse opzioni di rateizzazione
                            </p>
                        </div>
                    </div>
                    <div class="banner-btn wow fadeInUp mt-4" data-wow-delay="1500ms" data-wow-duration="2000ms">
                        <a class="readon green-banner" href="{{ route('course') }}">Seguire un corso di formazione</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Section End -->

    <!-- Faq Section Start -->
    <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
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
                    <div class="rs-free-contact">
                        <div class="sec-title3">
                            <h2 class="title white-color">Contattateci !</h2>
                        </div>
                        <form id="contact-form" method="post" action="">
                            <div class="row">
                                <div class="col-lg-6 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="name" name="name"
                                        placeholder="Nome" required="" />
                                </div>
                                <div class="col-lg-6 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="email" name="email"
                                        placeholder="E-mail" required="" />
                                </div>
                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="phone" name="phone"
                                        placeholder="Telefono" required="" />
                                </div>

                                <div class="col-lg-12 mb-35">
                                    <textarea class="from-control" id="message" name="message" placeholder=" Messaggio" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-btn">
                                <input class="readon submit-requset" type="submit" value="Inviare a" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq Section Start -->

    <!-- Testimonial Section Start -->
    <div class="rs-testimonial home12-style">
        <div class="container">
            <div class="sec-title4 mb-50 md-mb-30 text-center">
                <div class="sub-title primary">
                    Loro l’hanno fatto, perché non dovreste farlo voi?
                </div>
                <h2 class="title mb-0">Oltre 4.800 studenti soddisfatti</h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="false">
                <div class="testi-item">
                    <div class="item-content-basic">
                        <div class="desc">
                            <img class="quote" src="{{ asset('assets/images/testimonial/home12/quote.png') }}"
                                alt="" />
                            I corsi sono ben strutturati e molto gratificanti. Li
                            consiglio vivamente!
                        </div>
                        <div class="testi-content">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/images/testimonial/home12/1.jpg') }}" alt="" />
                            </div>
                            <div class="name">Hassanein Rehab T.</div>
                            <span class="designation">Studente</span>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="item-content-basic">
                        <div class="desc">
                            <img class="quote" src="{{ asset('assets/images/testimonial/home12/quote.png') }}"
                                alt="" />
                            Grazie a Odriverr, ho superato l'esame al primo tentativo!
                        </div>
                        <div class="testi-content">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/images/testimonial/home12/2.jpg') }}" alt="" />
                            </div>
                            <div class="name">Boeri Domenico</div>
                            <span class="designation">Studente</span>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="item-content-basic">
                        <div class="desc">
                            <img class="quote" src="{{ asset('assets/images/testimonial/home12/quote.png') }}"
                                alt="" />
                            Odriverr mi ha aiutato a prendere confidenza con la strada.
                            Gli istruttori sono eccezionali!
                        </div>
                        <div class="testi-content">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/images/testimonial/home12/3.jpg') }}" alt="" />
                            </div>
                            <div class="name">Alex Fernando</div>
                            <span class="designation">Studente</span>
                        </div>
                    </div>
                </div>
                <div class="testi-item">
                    <div class="item-content-basic">
                        <div class="desc">
                            <img class="quote" src="{{ asset('assets/images/testimonial/home12/quote.png') }}"
                                alt="" />
                            I corsi sono ben strutturati e molto gratificanti. Li
                            consiglio vivamente!
                        </div>
                        <div class="testi-content">
                            <div class="img-wrap">
                                <img src="{{ asset('assets/images/testimonial/home12/4.jpg') }}" alt="" />
                            </div>
                            <div class="name">Tamim Ikbal</div>
                            <span class="designation">Studente</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

@endsection
