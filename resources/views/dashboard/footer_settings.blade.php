@extends('master')

@section('title', 'Gestione del piè di pagina')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"
                                        class="breadcrumb-link">Pannello di controllo</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modifica le informazioni del piè di
                                    pagina</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mb-4">Modifica le informazioni del piè di pagina</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('footer.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Indirizzo</label>
                <input type="text" name="address" class="form-control" value="{{ $footer->address ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" name="phone" class="form-control" value="{{ $footer->phone ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{ $footer->email ?? '' }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection
