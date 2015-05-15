@extends('app')

@section('content')
    <div class="container">

        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif

        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif
        @include('partials.tercero_buscar_form')

        @if(Session::has('mensaje'))
            <div class="alert alert-info">
                <p>{{Session::get('mensaje')}}</p>
            </div>
        @endif
        <div class="row">
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Notas</th>
                </tr>
                </thead>
               <tbody>
                @foreach($terceros as $client)
                    <tr>
                        <td>{{ $client->nombre }}</td>
                        <td>{{ $client->nit }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->direccion }}</td>
                        <td>{{ $client->telefono }}</td>
                        <td>{{ $client->estado }}</td>
                        <td>{{ $client->notas }}</td>
                    </tr>
                @endforeach
               <h2>Listado de Clientes en Credito</h2>
                </tbody>
            </table>
            <h3>Informacion detalla de cliente</h3>
            <a href="{{ route('cliente_estado') }}"type="button" class="btn btn-success">Buscar</a>
        </div>
    </div>
@endsection