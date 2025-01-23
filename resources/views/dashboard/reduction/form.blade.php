@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">GESTION DES REDUCTIONS</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Réductions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter une réduction</li>
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
                        <form action="{{ route('reductions.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="prix_reduction" class="col-12 col-sm-3 col-form-label text-sm-right">Prix
                                    Réduction</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="prix_reduction" class="form-control input-md inputNew"
                                        value="{{ old('prix_reduction', $reduction->prix_reduction ?? '') }}" required>
                                    @error('prix_reduction')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="libelle" class="col-12 col-sm-3 col-form-label text-sm-right">Libellé</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="libelle" class="form-control input-md inputNew"
                                        value="{{ old('libelle', $reduction->libelle ?? '') }}" required>
                                    @error('libelle')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                        @if ($reduction)
                            <form action="{{ route('reductions.destroy') }}" method="POST" class="mt-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
