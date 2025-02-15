@extends('master')

@section('title', 'Facile Patente - Messaggi sulla patente di guida')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Messaggi degli utenti - Patente di guida</h2>
                    <div class="page-breadcrumb">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nome della famiglia</th>
                        <th>E-mail</th>
                        <th>Telefono</th>
                        <th>Indirizzo</th>
                        <th>Categoria di licenza</th>
                        <th>Villaggio</th>
                        <th>Metodo di pagamento</th>
                        <th>Messaggio</th>
                        <th>Data</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driverLicense as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->lastname }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->address }}</td>
                            <td>{{ $message->license_class }}</td>
                            <td>{{ $message->village }}</td>
                            <td>{{ $message->payment_option ?? 'Nessuna opzione selezionata' }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <!-- Marquer comme lu -->
                                <form action="{{ route('driverLicenseMessages.markAsRead', $message->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Segna come letto</button>
                                </form>

                                <!-- Supprimer -->
                                <form action="{{ route('driverLicenseMessages.delete', $message->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminare</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
