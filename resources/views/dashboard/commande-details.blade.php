@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">GESTION DES COMMANDES</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Détails d'une
                                        commande</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="text-center">Détails de la commande N°#{{ $id }}</h5>

                        @if ($produitsParVendeur->isEmpty())
                            <p class="text-center text-danger">Commande déjà traitée ou supprimée.</p>
                        @else
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach ($produitsParVendeur as $vendeurId => $produits)
                                    @foreach ($produits as $produitCommande)
                                        <div class="col">
                                            <div class="card shadow-sm h-100">
                                                <img src="{{ asset('storage/' . $produitCommande->produit_image) }}"
                                                    class="card-img-top img-fluid" alt="Image du produit">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $produitCommande->produit->nom }}</h5>
                                                    <p class="card-text">
                                                        <strong>ID Produit:</strong> {{ $produitCommande->produit_id }}<br>
                                                        <strong>Quantité:</strong> {{ $produitCommande->quantite }}<br>
                                                        <strong>Prix Unitaire:</strong>
                                                        €{{ number_format($produitCommande->prix, 2, '.', ' ') }}<br>
                                                        <strong>Montant Total:</strong>
                                                        €{{ number_format($produitCommande->prix * $produitCommande->quantite, 2, '.', ' ') }}
                                                    </p>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button class="btn btn-primary btn-sm">Modifier</button>
                                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
