@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('home') }}" class="btn btn-xs btn-primary">Volver</a>
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