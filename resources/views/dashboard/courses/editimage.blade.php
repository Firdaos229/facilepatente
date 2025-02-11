@extends('master')

@section('title', 'Facile Patente - Modifica dell immagine del corso')

@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid dashboard-content">
        <h3>Modifica le immagini del corso</h3>

        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $image->filename) }}" class="card-img-top" alt="Image du cours">
                        <div class="card-body">
                            <form action="{{ route('image.update', $image->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="image">Cambia l'immagine del corso : {{ $cours->title }}</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <input type="hidden" name="cours_id" value="{{ $cours->id }}">
                                <button type="submit" class="btn btn-primary">Per aggiornare</button>
                            </form>

                            <form action="{{ route('image.delete', $image->id) }}" method="POST"
                                onsubmit="return confirm('Voulez-vous vraiment supprimer cette image ?')" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminare</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <h4>Aggiungi una nuova immagine</h4>
                <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Aggiungi un'immagine</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <input type="hidden" name="cours_id" value="{{ $cours->id }}">
                    <button type="submit" class="btn btn-success">Aggiungere</button>
                </form>
            </div>
        </div>
    </div>
@endsection
