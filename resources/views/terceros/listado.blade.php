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
                <h2>Informe General de Carteras</h2>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Estado</th>
                    <th>Abonos</th>
                    <th>Saldo</th>
                    <th>Notas</th>
                </tr>
                </thead>

               <tbody>
                @foreach($terceros as $client)
                    <tr>
                        <td><a href="{{ route('cliente_estado')}}" "class="btn-link">{{ $client->nombre }}</a></td>
                        <td>{{ $client->nit }}</td>
                        <td>{{ $client->estado }}</td>
                        <td>{{number_format ( $client->abonos)}}</td>
                        <td>{{number_format ( $client->saldo)}}</td>
                        <td>{{ $client->notas }}</td>
                    </tr>
                @endforeach
                </tbody>
        </div>
    </div>
@endsection