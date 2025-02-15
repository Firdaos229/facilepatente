@extends('main')

@section('title', 'Contattateci')

@section('content')
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('assets/images/breadcrumbs/5.jpg') }}" alt="Breadcrumbs Image" />
        </div>
        <div class="breadcrumbs-text white-color padding">
            <h1 class="page-title white-color">Contattateci !</h1>
            <p>
                Avete una domanda? Lasciateci un messaggio e il nostro team dedicato
                sarà lieto di rispondervi!
            </p>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            @php
                $footer = App\Models\FooterSetting::first();
            @endphp

            <div class="row rs-contact-box mb-90 md-mb-50">
                <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="{{ asset('assets/images/contact/icon/1.png') }}" alt="" />
                        </div>
                        <div class="address-text">
                            <span class="label">Indirizzo</span>
                            <span class="des">{{ $footer->address ?? 'Indirizzo non definito' }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="{{ asset('assets/images/contact/icon/2.png') }}" alt="" />
                        </div>
                        <div class="address-text">
                            <span class="label">E-mail</span>
                            <span class="des"><a
                                    href="mailto:{{ $footer->email ?? '#' }}">{{ $footer->email ?? 'E-mail non definita' }}</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                    <div class="address-item">
                        <div class="icon-part">
                            <img src="{{ asset('assets/images/contact/icon/3.png') }}" alt="" />
                        </div>
                        <div class="address-text">
                            <span class="label">Telefono</span>
                            <span class="des"><a
                                    href="tel:{{ $footer->phone ?? '#' }}">{{ $footer->phone ?? 'Telefono non definito' }}</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 pl-60 md-pl-15">
                    <div class="contact-comment-box">
                        <div class="inner-part">
                            <h2 class="title mb-mb-15">
                                Lasciateci il vostro messaggio !
                            </h2>
                            <p>
                                Se avete domande o suggerimenti, non esitate a contattarci.
                            </p>
                        </div>
                        <div id="form-messages">
                            @if (session('success'))
                                <p class="success-message">{{ session('success') }}</p>
                            @elseif(session('error'))
                                <p class="error-message">{{ session('error') }}</p>
                            @endif
                        </div>

                        <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name"
                                            placeholder="Nome" required="" />
                                    </div>
                                    <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email"
                                            placeholder="E-mail" required="" />
                                    </div>
                                    <div class="col-lg-12 mb-35 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="phone" name="phone"
                                            placeholder="Telefono" required="" />
                                    </div>

                                    <div class="col-lg-12 mb-50">
                                        <textarea class="from-control" id="message" name="message" placeholder="Messaggio" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Inviare a" />
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

@endsection
