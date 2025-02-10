@extends('main')

@section('title', 'Permessi - Facile Patente')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/1.webp') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">È facile ottenere la licenza desiderata da Facile Patente !</h1>
            <p>Vi consiglieremo sulla scelta della licenza giusta per il vostro profilo.</p>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div id="rs-about" class="rs-about style1 pt-50 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="{{ asset('assets/images/about/dba37534d2.jpg') }}" alt="About Image" />
                    </div>
                </div>
                <div class="col-lg-6 pr-70 md-pr-15">
                    <div class="sec-title">
                        <h2 class="title">
                            Dettagli della <br /> licenza
                        </h2>
                        <div class="desc">
                            Chi deve fare domanda? <br>
                            Scegliete la licenza che volete prendere e inviate la vostra domanda. Se non sapete quale
                            licenza desiderate, lasciate un messaggio ai nostri professionisti che vi risponderanno al più
                            presto.
                        </div>
                        <div class="banner-btn wow fadeInUp mt-4" data-wow-delay="1500ms" data-wow-duration="2000ms">
                            <a class="readon green-banner" href="#">Prendete la mia licenza !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


    <!-- Faq Section Start -->
    <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
                    <div class="img-part">
                        <img class="" src="{{ asset('assets/images/about/View 1.jpg') }}" alt="About Image" />
                    </div>
                </div>
                <div class="col-lg-6 padding-0 col-md-12">
                    <div class="rs-free-contact">
                        <div class="sec-title3">
                            <h2 class="title white-color">Ottenere la patente di guida</h2>
                            <p>Semplificare il processo di conseguimento della patente di guida in Italia. Soluzioni su
                                misura, veloci e affidabili per tutti, anche per gli stranieri.</p>
                        </div>
                        <form id="contact-form" method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="name" name="name"
                                        placeholder="Nome" required="" />
                                </div>
                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="lastname" name="lastname"
                                        placeholder="Nome della famiglia" required="" />
                                </div>
                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="address" name="address"
                                        placeholder="Il vostro indirizzo" required="" />
                                </div>


                                <div class="col-lg-12 mb-30 col-md-12">
                                    <p>Classe della patente di guida</p>
                                    <select class="form-control" id="address" name="address" required>
                                        <option value="" disabled selected>Seleziona una licenza</option>
                                        <option value="AM">Licenza AM</option>
                                        <option value="A1">Licenza A1</option>
                                        <option value="A2">Licenza A2</option>
                                        <option value="A">Licenza A</option>
                                        <option value="B1">Licenza B1</option>
                                        <option value="B">Patente B</option>
                                        <option value="BE">Patente BE</option>
                                        <option value="C1E">Patente C1E</option>
                                        <option value="CE">Patente CE</option>
                                        <option value="D1E">Patente D1E</option>
                                        <option value="DE">Licenza DE</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="phone" name="phone"
                                        placeholder="Telefono" required="" />
                                </div>

                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="village" name="village"
                                        placeholder="Paese" required="" />
                                </div>

                                <div class="col-lg-12 mb-30 col-md-12">
                                    <p>Come desidera pagare la sua patente di guida ?</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="pagamento-unica-soluzione"
                                            name="pagamento[]" value="unica-soluzione" />
                                        <label class="form-check-label" for="pagamento-unica-soluzione">
                                            In un'unica soluzione
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="pagamento-due-rate"
                                            name="pagamento[]" value="due-rate" />
                                        <label class="form-check-label" for="pagamento-due-rate">
                                            In due rate
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="pagamento-tre-rate"
                                            name="pagamento[]" value="tre-rate" />
                                        <label class="form-check-label" for="pagamento-tre-rate">
                                            Fino a tre rate
                                        </label>
                                    </div>
                                </div>


                                <div class="col-lg-12 mb-30 col-md-12">
                                    <input class="from-control" type="text" id="email" name="email"
                                        placeholder="E-mail" required="" />
                                </div>

                                <div class="col-lg-12 mb-35">
                                    <textarea class="from-control" id="message" name="message" placeholder="Avete una domanda urgente ? Fatela qui !"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="form-btn">
                                <input class="readon submit-requset" type="submit" value="Invia la tua richiesta !" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq Section Start -->


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
                <div class="col-lg-12 padding-0 col-md-12 md-mb-40">
                    <div class="main-part new-style">
                        <div class="title mb-20">
                            <h1 class="text-part">Domande frequenti</h1>
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
