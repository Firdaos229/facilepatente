@extends('master')

@section('title', 'Facile Patente - Liste des Cours')

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
                    <h2 class="pageheader-title">ELENCO CORSI</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestione del corso</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Elenco dei corsi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <button class="btn btn-space btn-primary mb-3">
                <a href="{{ route('createCours') }}" class="text-white">Aggiungi un nuovo corso</a>
            </button>
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header">Tutti i corsi</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered second">
                                <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">#</th>
                                        <th class="border-0">Immagine</th>
                                        <th class="border-0">Titolo del corso</th>
                                        <th class="border-0">Numero totale di corsi</th>
                                        <th class="border-0">Azione</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cours as $course)
                                        <tr data-entry-id="{{ $course->id }}">
                                            <td>{{ $course->id }}</td>
                                            <td>
                                                <div class="m-r-10">
                                                    @if ($course->images->isNotEmpty())
                                                        <img src="{{ asset('storage/' . $course->images->first()->filename) }}" class="rounded" alt="{{ $course->title }}" width="45">
                                                    @else
                                                        <p>Nessuna immagine disponibile per questo corso.</p>
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ $course->total_courses }}</td>
                                            <td>
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('cours.edit', $course->id) }}" class="ml-4 btn btn-info">Per modificare</a>
                                                        <form action="{{ route('cours.destroy', $course->id) }}" onsubmit="return confirm('Voulez-vous vraiment supprimer ce cours ?')" method="POST" class="mt-2">
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
    @endsection
