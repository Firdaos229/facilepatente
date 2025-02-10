@extends('master')

@section('title', 'GadgetHaven - Ajout Témoignages')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">AGGIUNGI UNA NUOVA TESTIMONIAL</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aggiungi una testimonianza</li>
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
                        <form action="{{ route('temoignages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nome utente</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nom_utulisateur" class="form-control input-md inputNew"
                                        placeholder="Inserisci il nome utente" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Foto dell'utente</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file" name="photo_utulisateur" class="form-control input-md inputNew"
                                        placeholder="Foto dell'utente" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Commento</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="commentaire" class="form-control input-md inputNew" placeholder="Inserisci il commento del cliente"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Aggiungere</button>
                                    <button class="btn btn-space btn-secondary"><a href="{{ route('temoignages.index') }}"
                                            class="text-white">Vedi tutte le testimonianze</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
