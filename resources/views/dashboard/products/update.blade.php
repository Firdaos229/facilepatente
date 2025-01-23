@extends('master')

@section('title', 'GadgetHaven - Modification Produit')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">MODIFIEZ LE PRODUIT</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('displayProducts') }}"
                                        class="breadcrumb-link">Gestion des Produits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifier ce produit</li>
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
                        <form action="{{ route('produit.update', $produit->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="idCat" class="col-12 col-sm-3 col-form-label text-sm-right">Catégorie</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select name="idCat" id="idCat" class="form-control input-md inputNew" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $produit->idCat ? 'selected' : '' }}>
                                                {{ $category->nom }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nom" class="col-12 col-sm-3 col-form-label text-sm-right">Nom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nom" class="form-control input-md inputNew"
                                        value="{{ $produit->nom }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                    class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="description" class="form-control input-md inputNew" required>{{ $produit->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="details" class="col-12 col-sm-3 col-form-label text-sm-right">Détails</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea name="details" class="form-control input-md inputNew" required>{{ $produit->details }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prix" class="col-12 col-sm-3 col-form-label text-sm-right">Prix</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="prix" class="form-control input-md inputNew"
                                        value="{{ $produit->prix }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="quantite" class="col-12 col-sm-3 col-form-label text-sm-right">Quantité</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="quantite" class="form-control input-md inputNew"
                                        value="{{ $produit->quantite }}" required>
                                </div>
                            </div>



                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Mettre à jour le
                                        produit</button>
                                    <a href="{{ route('displayProducts') }}"
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
