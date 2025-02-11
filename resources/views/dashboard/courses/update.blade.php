@extends('master')

@section('title', 'Facile Patente | Modifica un corso')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Modifica un corso</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('displayCourses') }}" class="breadcrumb-link">Gestione del corso</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifica corso</li>
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
                        <form action="{{ route('cours.update', $cours->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Titolo del corso</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" name="title" class="form-control" value="{{ $cours->title }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Numero totale di corsi</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="number" name="total_courses" class="form-control" value="{{ $cours->total_courses }}" required min="1">
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-primary">Corso di aggiornamento</button>
                                    <a href="{{ route('displayCourses') }}" class="btn btn-space btn-secondary text-white">Cancellare</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
