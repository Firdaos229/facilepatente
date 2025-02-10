@extends('master')

@section('title', 'GadgetHaven - Liste Témoignages')

@section('content')

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="container-fluid dashboard-content">
        <!-- Page Header -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">ELENCO DELLE DIVERSE TESTIMONIANZE</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}" class="breadcrumb-link">Pannello di controllo</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#" class="breadcrumb-link">Gestione delle testimonianze</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Elenco delle testimonianze</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bouton Ajouter -->
        <div class="row mb-3">
            <button class="btn btn-space btn-primary">
                <a href="{{ route('temoignages.create') }}" class="text-white">Aggiungi una nuova testimonianza</a>
            </button>
        </div>

        <!-- Table des Témoignages -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">Tutte le testimonianze</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Foto</th>
                                        <th>Commento</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($temoignages as $temoignage)
                                        <tr>
                                            <!-- Nom -->
                                            <td>{{ $temoignage->nom_utulisateur }}</td>

                                            <!-- Photo -->
                                            <td>
                                                <img src="{{ asset('storage/' . $temoignage->photo_utulisateur) }}"
                                                    alt="Photo" class="rounded" style="width: 50px; height: 50px;">
                                            </td>

                                            <!-- Commentaire -->
                                            <td>{{ $temoignage->commentaire }}</td>

                                            <!-- Actions -->
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop"
                                                        data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <!-- Modifier -->
                                                        <a href="{{ route('temoignages.edit', $temoignage) }}"
                                                            class="dropdown-item mb-2 btn btn-info">
                                                            Per modificare
                                                        </a>

                                                        <!-- Supprimer -->
                                                        <form action="{{ route('temoignages.destroy', $temoignage) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Voulez-vous vraiment supprimer ce témoignage ?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item btn btn-danger">
                                                                ELIMINARE
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
