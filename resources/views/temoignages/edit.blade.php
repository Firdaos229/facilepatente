@extends('master')

@section('title', 'GadgetHaven - Modification Témoignage')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">MODIFIER LE TÉMOIGNAGE</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}" class="breadcrumb-link">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="breadcrumb-link">Gestion des Témoignages</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier ce témoignage</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('temoignages.update', $temoignage) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="nom_utulisateur" class="col-12 col-sm-3 col-form-label text-sm-right">Nom de
                                    l'utilisateur</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nom_utulisateur" class="form-control input-md"
                                        value="{{ $temoignage->nom_utulisateur }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo_utulisateur" class="col-12 col-sm-3 col-form-label text-sm-right">Photo de
                                    l'utilisateur</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file" name="photo_utulisateur" class="form-control input-md">
                                    @if ($temoignage->photo_utulisateur)
                                        <img src="{{ asset('storage/' . $temoignage->photo_utulisateur) }}"
                                            alt="Photo utilisateur" class="mt-2 rounded" style="width: 50px; height: 50px;">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="commentaire"
                                    class="col-12 col-sm-3 col-form-label text-sm-right">Commentaire</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="commentaire" class="form-control input-md" required>{{ $temoignage->commentaire }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Mettre à jour</button>
                                    <a href="{{ route('temoignages.index') }}"
                                        class="btn btn-space btn-secondary text-white">Annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
