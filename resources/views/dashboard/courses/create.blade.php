@extends('master')

@section('title', 'Facile Patente | Aggiungi un corso')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Aggiungi un corso</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestione del corso</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Aggiungi un corso</li>
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
                        <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Titolo del corso</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Inserisci il titolo del corso" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Numero totale di corsi</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="total_courses" class="form-control" placeholder="Ex: 10"
                                        required min="1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Immagini del corso</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file" name="image" class="form-control input-md inputNew"
                                        size="18" id="image" required>
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Crea il corso</button>
                                    <a href="{{ route('cours.index') }}"
                                        class="btn btn-space btn-secondary text-white">Vedi tutti i corsi</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
