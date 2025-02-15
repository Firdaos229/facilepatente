@extends('master')

@section('title', 'Facile Patente | Modifica un prezzo')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Modifica un prezzo</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('pricings.index') }}"
                                        class="breadcrumb-link">Gestione dei prezzi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifica prezzo</li>
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
                        <form action="{{ route('pricings.update', $pricing->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Titolo</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="title" class="form-control" value="{{ $pricing->title }}"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Sottotitolo</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="subtitle" class="form-control"
                                        value="{{ $pricing->subtitle }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Prezzo (€)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="price" class="form-control" step="0.01"
                                        value="{{ $pricing->price }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Funzionalità (separate da
                                    virgole)</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="features" class="form-control"
                                        value="{{ implode(', ', json_decode($pricing->features, true)) }}" required>

                                    {{-- <input type="text" name="features" class="form-control" value="{{ $pricing->features }}" required> --}}
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Aggiorna prezzo</button>
                                    <a href="{{ route('pricings.index') }}"
                                        class="btn btn-space btn-secondary text-white">Annulla</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
