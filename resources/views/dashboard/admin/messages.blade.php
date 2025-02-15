@extends('master')

@section('title', 'Facile Patente - Messaggi')

@section('content')
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Messaggi degli Utenti per la Patente di Guida</h2>
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
                        <th>E-mail</th>
                        <th>Telefono</th>
                        <th>Messaggio</th>
                        <th>Data</th>
                        <th>Azione</th> <!-- Colonna per le azioni -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>
                                <!-- Form per segnare come letto -->
                                <form action="{{ route('messages.markAsRead', $message->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Segna come Letto</button>
                                </form>

                                <!-- Form per eliminare il messaggio -->
                                <form action="{{ route('messages.delete', $message->id) }}" method="POST"
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
