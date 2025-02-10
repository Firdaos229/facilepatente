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
                        <h2 class="pageheader-title">STATISTIQUES DU SITE</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
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
                                    <h5 class="text-muted">Nombre d'utilisateurs</h5>
                                    <h2 class="mb-0">34</h2>
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
                                    <h5 class="text-muted">Chiffre d'affaires</h5>
                                    <h2 class="mb-0">€ 00</h2>
                                </div>
                                <div class="float-right icon-circle-medium icon-box-lg bg-secondary-light mt-1">
                                    <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Fin Chiffre d'affaires -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Commandes non traitées -->
                    <!-- ============================================================== -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-inline-block">
                                    <h5 class="text-muted">Commandes non traitées</h5>
                                    <h2 class="mb-0">00</h2>
                                </div>
                                <div class="float-right icon-circle-medium icon-box-lg bg-brand-light mt-1">
                                    <i class="fa fa-exclamation-circle fa-fw fa-sm text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Fin Commandes non traitées -->
                    <!-- ============================================================== -->
                </div>
            </div>
        </div>
    </div>
@endsection
