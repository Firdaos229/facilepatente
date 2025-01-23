@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">COMMANDES NON-TRAITES</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion des
                                        Commandes non-traité</a></li>
                              
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

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
                                        
        
                <div class="card-body">
           <div class="table-responsive">
                  <table class="table align-middle mb-0">
                   <thead class="table-light">
                    <tr>
                      <th>ID commande </th>
                      <th>Acheteur</th>
                      <th>N° Acheteur</th>
                      <th>Adresse Livraison</th>
                      <th>Montant de la commande</th>
                      <th>Statut commande</th>
                      <th>Date achat</th>
                      <th>Details</th>
                      <th>statut</th>
                      <th>Suppression</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($commandesnontraites as $commande)

                    <tr>
                   
                   
                  
                     <td> #{{$commande->id}}</td>
                     <td>{{$commande->Acheteur_nom}}  {{$commande->Acheteur_prenom}} </td>
                     <td> (+229) {{$commande->Acheteur_numero}}</td>
                     <td>{{$commande->Acheteur_adresse}}</td>
                     <td>€{{ number_format((float) $commande->Montant, 2, '.', ' ') }}</td>
                    <td>  @if($commande->statut == 1)
    Traité
    @else
  Non-traité
    @endif</td>
                     <td>{{$commande->created_at}}</td>

                     <td>
                     <a href="{{ route('commande.details', $commande->id) }} ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
  </svg>
</a>

</td>
<td>  @if ($commande->statut == 0)
                        <form action="{{ route('commande.updateStatutcommande', ['id' => $commande->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Traiter</button>
                        </form>
                        @else
                        <form action="{{ route('commande.nontraiter', ['id' => $commande->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Non-traiter</button>
                        </form>
                        @endif</td>
                  
                    
                    <td>
                    <form action="{{route('commande.destroy' , $commande->id )}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer cette commande ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                    </td>
                   
                    </tr>
                    @endforeach




                  
                    <div class="row pagi">
      <div class="col-sm-6 col-xs-6 text-left"></div>
      <div class="col-sm-6 col-xs-6 text-right tot"> {{ $commandesnontraites->links('pagination::bootstrap-4') }}</div>
    </div>



                   </tbody>
                 </table>
                 </div>
              
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
