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

                        @if ($about)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $about->A_propos }}</h5>
                                    @if ($about->image)
                                        <img src="{{ asset('storage/abouts/' . $about->image) }}" alt="Image À propos"
                                            class="img-fluid" style="max-height: 200px;">
                                    @endif
                                    <br>
                                    <a href="{{ route('admin.about.create') }}" class="btn btn-primary mt-3">Modifier</a>
                                </div>
                            </div>
                        @else
                            <p>Aucune information "À propos" disponible. <a href="{{ route('admin.about.create') }}"
                                    class="btn btn-primary mt-3">Ajouter</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
