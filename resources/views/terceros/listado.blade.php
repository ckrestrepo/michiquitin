@extends('app')

@section('content')

    <h1>Terceros</h1>
    @include('partials.tercero_buscar_form')

    @if(Session::has('mensaje'))
        <div class="alert alert-info">
            <p>{{Session::get('mensaje')}}</p>
        </div>
    @endif

    <div class="container">
        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif

        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif
        <div class="row">
            <a href="{{ route('terceros') }}" class="btn btn-xs btn-primary">Volver</a>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Notas</th>
                </tr>
                </thead>
                <tbody>
                @foreach($terceros as $tercero)
                    <tr>
                        <td>{{ $tercero->nombre }}</td>
                        <td>{{ $tercero->cedula }}</td>
                        <td>{{ $tercero->email }}</td>
                        <td>{{ $tercero->direccion }}</td>
                        <td>{{ $tercero->telefono }}</td>
                        <td>{{ $tercero->estado }}</td>
                        <td>{{ $tercero->notas }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection