@extends('master')

@section('title', 'GadgetHaven - Ajout Produits')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">AJOUTEZ UNE NOUVEAU PRODUIT</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Produits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter un produit</li>
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
                        <form action="{{ route('pastePro') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="idCat" class="col-12 col-sm-3 col-form-label text-sm-right">Catégorie</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select name="idCat" id="idCat" class="form-control input-md inputNew" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nom" class="form-control input-md inputNew"
                                        placeholder="Entrez le nom du produit" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="description" class="form-control input-md inputNew" placeholder="Entrez la description sur le produit"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Détails</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="details" class="form-control input-md inputNew" placeholder="Entrez les détails sur le produit"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Prix</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="prix" class="form-control input-md inputNew"
                                        placeholder="Entrez le prix du produit" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantité</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="quantite" class="form-control input-md inputNew"
                                        placeholder="Entrez la quantité en stock" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Images</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="file" name="image[]" class="form-control input-md inputNew"
                                        size="18" multiple required>
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Nouveau Produit</button>
                                    <button class="btn btn-space btn-secondary"><a href="{{ route('displayProducts') }}"
                                            class="text-white">Voir tous les produits</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
