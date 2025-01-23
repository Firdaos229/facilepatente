@extends('master')

@section('title', 'GadgetHaven - Modification Image')

@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid dashboard-content">
        <h3>Modifier les images du produit</h3>

        <div class="row">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $image->filename) }}" class="card-img-top" alt="Image du produit">
                        <div class="card-body">
                            <form action="{{ route('image.update', $image->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="image">Changer l'image du produit : {{ $produit->nom }}</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
