@extends('master')

@section('title', 'GadgetHaven - Ajout Catégories')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">AJOUTEZ UNE NOUVELLE CATEGORIE</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Catégories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter une catégorie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                @if(session('success'))
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
                        <form action="{{ route('storecategorie') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nom" class="form-control input-md inputNew"
                                        placeholder="Entrez le nom de la catégorie" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Logo</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file" name="svg" class="form-control input-md inputNew"
                                        placeholder="logo catégorie" required>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Nouvelle Catégorie</button>
                                    <button class="btn btn-space btn-secondary"><a href="{{ route('categories.index') }}"
                                            class="text-white">Voir toutes les catégories</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
