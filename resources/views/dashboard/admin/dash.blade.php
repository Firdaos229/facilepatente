@extends('master')

@section('title', 'Facile Patente - Dashboard')

@section('content')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content">
            <!-- ============================================================== -->
            <!-- Page Header -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">STATISTICHE DEL SITO</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pannello di
                                            controllo</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Fin Page Header -->
            <!-- ============================================================== -->

            <div class="ecommerce-widget">
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- Nombre d'utilisateurs -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">
                                        <a class="nav-link" href="{{ route('dashboard.admin.driver-license') }}">Visualizza
                                            le richieste di contatto</a>
                                    </h5>
                                </div>
                                <div class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1">
                                    <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Fin Nombre d'utilisateurs -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Chiffre d'affaires -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <a class="nav-link"
                                            href="{{ route('dashboard.admin.driver-license') }}"><h5 class="text-muted">Visualizza le richieste di
                                            registrazione</h5></a>
                                </div>
                                <div class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1">
                                    <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Fin Chiffre d'affaires -->
                    <!-- ============================================================== -->

                </div>
            </div>
        </div>
    </div>
@endsection
