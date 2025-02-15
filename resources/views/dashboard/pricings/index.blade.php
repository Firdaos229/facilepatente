@extends('master')

@section('title', 'Facile Patente | Listino prezzi')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Listino prezzi</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestione dei prezzi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listino prezzi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <button class="btn btn-space btn-primary mb-3">
                <a href="{{ route('pricings.create') }}" class="text-white">Aggiungi un prezzo</a>
            </button>
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">Tutti i prezzi</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered second">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Titolo</th>
                                        <th>Sottotitolo</th>
                                        <th>Prezzo (€)</th>
                                        <th>Caratteristiche</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pricings as $pricing)
                                        <tr>
                                            <td>{{ $pricing->id }}</td>
                                            <td>{{ $pricing->title }}</td>
                                            <td>{{ $pricing->subtitle }}</td>
                                            <td>{{ number_format($pricing->price, 2, ',', ' ') }} €</td>
                                            <td>
                                                <ul>
                                                    @foreach (explode(',', $pricing->features) as $feature)
                                                        <li>{{ trim($feature) }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('pricings.edit', $pricing->id) }}" class="ml-4 btn btn-info">Per modificare</a>
                                                        <form action="{{ route('pricings.destroy', $pricing->id) }}" method="POST" class="mt-2" onsubmit="return confirm('Sei sicuro di voler rimuovere questa tariffa?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Eliminare</button>
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
