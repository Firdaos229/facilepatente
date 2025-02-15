@extends('master')

@section('title', 'Facile Patente | Aggiungi un prezzo')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Aggiungi un prezzo</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestione dei prezzi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aggiungi un prezzo</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{ route('pricings.store') }}" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Titolo</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{ old('title') }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Sottotitolo</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="subtitle" class="form-control" placeholder="Inserisci il sottotitolo" value="{{ old('subtitle') }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Prezzo (€)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="price" class="form-control" step="0.01" placeholder="Ex: 99.99" value="{{ old('price') }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Funzionalità (separate da virgole)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="features" class="form-control" placeholder="Ex: Supporto 24/7, Accesso illimitato" value="{{ old('features') }}" required>
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Aggiungi prezzo</button>
                                    <a href="{{ route('pricings.index') }}" class="btn btn-space btn-secondary text-white">Vedi tutti i prezzi</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
