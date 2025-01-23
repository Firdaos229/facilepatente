@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">GESTION DU FOOTER</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion du
                                        footer</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Footer</li>
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
                        <h1>Modifier le Footer</h1>

                        <form action="{{ route('admin.footer.create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description', $footer->description ?? '') }}</textarea>
                            </div>


                            <div class="form-group">
                                <label for="Conditions_generale">Conditions générales</label>
                                <textarea name="Conditions_generale" id="Conditions_generale" class="form-control">{{ old('Conditions_generale', $footer->Conditions_generale ?? '') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="politique_de_confidentialite">Politique de confidentialité</label>
                                <textarea name="politique_de_confidentialite" id="politique_de_confidentialite" class="form-control">{{ old('politique_de_confidentialite', $footer->politique_de_confidentialite ?? '') }}</textarea>
                            </div>



                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email', $footer->email ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ old('phone', $footer->phone ?? '') }}">
                            </div>

                            <div class="form-group row text-left">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Enregistrer</button>
                                    <button class="btn btn-space btn-secondary"><a href="{{ route('admin.footer.index') }}"
                                            class="text-white">Voir toutes les informations</a></button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
