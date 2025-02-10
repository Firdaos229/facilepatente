@extends('main')

@section('title', 'GadgetHaven - Details commande')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">DETAILS DE LA COMMANDE</h2>
                    <div class="page-breadcrumb">

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

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                    <div class="card-body">



                        <div class="page-wrapper">
                            <div class="page-content">
                                <div class="card radius-10">

                                    <h5>Détails de la commande </h5>
                                    @if (session('success'))
                                        <div class="alert alert-success text-center">
                                            <strong>{{ session('success') }}</strong>
                                        </div>
                                    @endif


                                    @if ($produitsParVendeur->isEmpty())
                                        <p>Aucun produit dans cette commande.</p>
                                    @else
                                        @foreach ($produitsParVendeur as $vendeurId => $produits)
                                            <br>
                                            <ul>
                                                @foreach ($produits as $produitCommande)
                                                    <li>

                                                        <strong>Nom Produit:</strong> {{ $produitCommande->produit->nom }}
                                                        <img src="{{ asset('storage/' . $produitCommande->produit_image) }} "
                                                            width="5%" alt="image du produit"> <br>
                                                        <strong>Quantité:</strong> {{ $produitCommande->quantite }} <br>
                                                        <strong>Prix:</strong> {{ $produitCommande->prix }} XOF <br>
                                                        <strong>Montant Total:</strong>
                                                        {{ $produitCommande->prix * $produitCommande->quantite }} XOF <br>


                                                        <br><br>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        @endforeach

                                </div>
                            </div>
                            @endif




                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
