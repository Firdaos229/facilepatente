@extends('master')

@section('title', 'GadgetHaven - Réduction')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">GESTION DES UTULISATEURS</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Liste des utulisateurs</a></li>
                
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
                     <th> ID </th>
                      <th>Nom et prénoms</th>
                    
                      <th>Télephone</th>
                      <th>email</th>
                      <th>Date inscription</th>

                      <th>Suppression</th>
                     
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($userall as $userone)

                    <tr>
                   
                   
                     <td>{{$userone->id}}</td>
                     <td>{{$userone->name}}</td>
                     <td>{{$userone->numero}}</td>
                     <td>{{$userone->email}}</td>
                     <td>{{$userone->created_at}}</td>
                    
                    <td>
                    <form action="{{route('user.destroy' , $userone->id )}}" method="POST" style="display: inline-block;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet utulisateur?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer le compte</button>
                                    </form>
                    </td>
                   
                    </tr>
                    @endforeach




                  
                    <div class="row pagi">
      <div class="col-sm-6 col-xs-6 text-left"></div>
      <div class="col-sm-6 col-xs-6 text-right tot"> {{ $userall->links('pagination::bootstrap-4') }}</div>
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
