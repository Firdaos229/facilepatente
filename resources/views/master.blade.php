<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo 1.png') }}" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('asset/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
        href="{{ asset('asset/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/vendor/datatables/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendor/datatables/css/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/vendor/datatables/css/select.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('dashboard') }}">GadgetHaven</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('asset/images/avatar-1.jpg') }}" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> {{ Auth::user()->name }} </h5>

                                </div>
                                <a class="dropdown-item" href="{{ route('profile') }}"><i
                                        class="fas fa-user mr-2"></i>Profil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{ route('dashboard') }}"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                        class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-5" aria-controls="submenu-5"><i
                                        class="fas fa-fw fa-table"></i>Gestion des Catégories</a>
                                <div id="submenu-5" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('createcategorie') }}"><i
                                                    class="fas fa-plus-circle"></i>Ajouter une catégorie</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('categories.index') }}"><i
                                                    class="fas fa-list"></i>Liste des
                                                catégories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fas fa-tasks"></i>Gestion des Produits</a>
                                <div id="submenu-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('createproduit') }}"><i
                                                    class="fas fa-plus-circle"></i>Ajouter un produit</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('displayProducts') }}"><i
                                                    class="fas fa-list"></i>Liste des
                                                produits</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('reductions.index') }}"><i
                                                    class="fas fa-plus-circle"></i>Gestion des réductions</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fas fa-shopping-bag"></i>Gestion des Commandes</a>
                                <div id="submenu-3" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('listescommades') }}"><i
                                                    class="fas fa-list-ol"></i>Liste des commandes</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('commandesnontraite') }}"><i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-ban"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0" />
                                                    </svg></i>Commande non-traité</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('commandestraite') }}"><i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-bookmark-check-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                                    </svg></i>Commande traité</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-4" aria-controls="submenu-4"><i
                                        class="fas fa-cog mr-2"></i>Paramètres</a>
                                <div id="submenu-4" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('all') }}"><i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-people"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                                    </svg></i>Liste des utilisateurs</a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('createpub') }}"><i
                                                class="fas fa-plus-circle"></i>Ajoutez une
                                                publicité</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('temoignages.create') }}">
                                                <i class="fas fa-comment"></i> Témoignages
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('admin.about.create') }}"><i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-file-earmark"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                                                    </svg></i>A propos </a>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{ route('admin.footer.index') }}"><i><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                                                    </svg></i>Infos du site </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('index') }}"><i
                                        class="fas fa-arrow-left"></i></i>Retourner au site public</a>
                            </li>
                            <li
                                class="relative flex cursor-pointer items-center gap-2 py-4 after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-0 after:bg-primary-500 after:transition-all after:duration-300 after:content-[''] hover:text-primary-500 hover:after:w-full">

                                <div>
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i
                                            class="fas fa-power-off mr-2"></i>
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @yield('content')

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer mt-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            Copyright © 2024 GadgetHaven. Tous Droits Réserves.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="{{ route('about') }}">A propos</a>
                                <a href="{{ route('contact') }}">Contactez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('asset/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('asset/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('asset/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('asset/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('asset/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('asset/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/charts/morris-bundle/morris.js') }}"></script>
    <script src="{{ asset('asset/libs/js/dashboard-ecommerce.js') }}"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('asset/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('asset/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/datatables/js/data-table.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

</body>

</html>
