@extends('master')

@section('title', 'GadgetHaven - Infos')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Infos du
                                        site</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ajouter les informations</li>
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


                        @if ($footer)
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Description</h5>
                                    <p>{{ $footer->description ?? 'Non défini' }}</p>



                                    <h5 class="card-title">Conditions Générales</h5>
                                    <p>{{ $footer->Conditions_generale ?? 'Non défini' }}</p>

                                    <h5 class="card-title">Politique de Confidentialité</h5>
                                    <p>{{ $footer->politique_de_confidentialite ?? 'Non défini' }}</p>



                                    <h5 class="card-title">Contacts</h5>
                                    <p>Email : {{ $footer->email ?? 'Non défini' }}</p>
                                    <p>Téléphone : {{ $footer->phone ?? 'Non défini' }}</p>


                                    <!-- <h5 class="card-title">Liens Réseaux Sociaux</h5>
                        <p>LinkedIn : <a href="{{ $footer->lien_linkedin ?? '#' }}" target="_blank">{{ $footer->lien_linkedin ?? 'Non défini' }}</a></p>
                        <p>Facebook : <a href="{{ $footer->lien_facebook ?? '#' }}" target="_blank">{{ $footer->lien_facebook ?? 'Non défini' }}</a></p>
                        <p>WhatsApp : <a href="{{ $footer->lien_whatsaap ?? '#' }}" target="_blank">{{ $footer->lien_whatsaap ?? 'Non défini' }}</a></p> -->

                                    <a href="{{ route('admin.footer.create') }}" class="btn btn-primary mt-3">Modifier</a>
                                </div>
                            </div>
                        @else
                            <p>Aucune information de footer disponible. <a href="{{ route('admin.footer.create') }}"
                                    class="btn btn-primary mt-3">Ajouter</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
