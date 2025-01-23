@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">GESTION DES PUBLICITE</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        pubs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter une publicite</li>
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
                  
                    <form action="{{ route('storepub') }}" method="POST" enctype="multipart/form-data">
            @csrf
              
                <div class="inner">
               
                  <h3 >AJOUTEZ UNE NOUVELLE PUBLICITE</h3>
                  <hr>
                
                  <br>
                  <div class="form-group">
                    <input type="file" name="image" class="form-control input-md inputNew"  placeholder="image de la publicite"  required>
                  </div>
                  <div class="button-submit">
                    <button type="submit" name="submitNewsletter" class="btn btn-block btn-primary">Nouvelle PUB</button>
                  </div>
                  
                </div>
              </form>
              <br>
              
              <a href="{{route('publicites.index')}}"> <button type="button" class="btn btn-block btn-primary">Gérer les publicités </button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
