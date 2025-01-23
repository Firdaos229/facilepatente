@extends('master')

@section('title', 'GadgetHaven - Liste Produits')

@section('content')

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">LISTE DES DIFFERENTES CATEGORIES</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Catégories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste des catégories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-space btn-primary mb-3 "><a href="{{ route('createcategorie') }}"
                    class="text-white">Ajouter une nouvelle catégorie</a></button>
            <div class=" col-lg-12 ">
                <div class="card">
                    <h5 class="card-header">Toutes les catégories</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered second">
                                <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">#</th>
                                        <th class="border-0">Logo</th>
                                        <th class="border-0">Catégorie Produit</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($categories as $categorie)
                                    <tbody>
                                        <tr data-entry-id="{{ $categorie->id }}">
                                            <td>{{ $categorie->id }}</td>
                                            <td>
                                                <div class="m-r-10"> <img src="{{ asset('storage/' . $categorie->svg) }}"
                                                        class="rounded" alt="{{ $categorie->nom }}" width="45"></div>
                                            </td>
                                            <td>{{ $categorie->nom }}</td>
                                            <td>
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle card-drop"
                                                        data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('categories.edit', $categorie->id) }}"
                                                            class="ml-4 btn btn-info">Modifier</a>

                                                        <a href="" class="dropdown-item">
                                                            <form action="{{ route('categories.destroy', $categorie->id) }}"
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
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
