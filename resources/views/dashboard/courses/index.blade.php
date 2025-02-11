@extends('master')

@section('title', 'GadgetHaven - Liste Produits')

@section('content')

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">LISTE DES PRODUITS</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Produits</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des produits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-space btn-primary mb-3 ">
                <a href="{{ route('createproduit') }}" class="text-white">Ajouter un nouveau produit</a>
            </button>
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">Tous les produits</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered second">
                                <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">#</th>
                                        <th class="border-0">Image</th>
                                        <th class="border-0">Nom du produit</th>
                                        <th class="border-0">Catégorie</th>
                                        <th class="border-0">Prix</th>
                                        <th class="border-0">Quantité</th>
                                        <th class="border-0">Description</th>
                                        <th class="border-0">Détails</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produits as $product)
                                        <tr data-entry-id="{{ $product->id }}">
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <div class="m-r-10">
                                                    @if ($product->images->isNotEmpty())
                                                        <img src="{{ asset('storage/' . $product->images->first()->filename) }}"
                                                            class="rounded" alt="{{ $product->nom }}" width="45">
                                                    @else
                                                        <p>Aucune image disponible pour ce produit.</p>
                                                    @endif
                                                </div>
                                            </td>

                                            <td>{{ $product->nom }}</td>
                                            <td>{{ $product->categorie->nom }}</td>
                                            <td>{{ number_format($product->prix, 2, ',', ' ') }} €</td>
                                            <td>{{ $product->quantite }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->details }}</td>
                                            <td>
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle card-drop"
                                                        data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('produit.edit.image', $product->id) }}"
                                                            class="ml-4 mb-2 btn btn-primary">Voir les images</a>
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                            class="ml-4 btn btn-info">Modifier</a>
                                                        <a href="" class="dropdown-item">
                                                            <form action="{{ route('produit.destroy', $product->id) }}"
                                                            onsubmit="return confirm('Voulez-vous vraiment supprimer ce produit ?')"
                                                                method="POST" class="mt-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" 
                                                                    class="btn btn-danger">Supprimer</button>
                                                            </form>

                                                        </a>
                                                       
                                                    </div>
                                                </div>
                                            </td>
                                           
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{-- {{ $produits->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
