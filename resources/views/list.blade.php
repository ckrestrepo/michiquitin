@extends('app')

@section('content')
    <div class="container">

        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif

        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif

        <div class="row">
            <a href="{{ route('home') }}" class="btn btn-info">Volver</a>
            <a href="{{ route('client') }}" class="btn btn-success">+ Nuevo Reporte</a>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Producto Comprado</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Tipo</th>
                    <th>Numero Registro</th>
                    <th>Saldo Anterior</th>
                    <th>Monto Abonado</th>
                    <th>Saldo Restante</th>
                    <th>Proximo Pago</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->nombre }}</td>
                        <td>{{ $client->cedula }}</td>
                        <td>{{ $client->producto_comprado }}</td>
                        <td>{{ $client->telefono }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->direccion }}</td>
                        <td>{{ $client->tipo}}</td>
                        <td>{{ $client->registro}}</td>
                        <td>{{number_format ( $client->saldo_anterior)}}</td>
                        <td>{{number_format  ($client->monto_abonado) }}</td>
                        <td>{{number_format(@ doubleval($client->saldo_anterior) - doubleval($client->monto_abonado))}}</td>
                        <td>{{ $client->proximo_pago }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection