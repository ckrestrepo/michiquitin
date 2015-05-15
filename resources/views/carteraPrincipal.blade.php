@extends('app')
@section('content')
    <H1>CARTERA</H1>
    <div class="container">
        <div class="btn-group-vertical">
            <a href="{{ route('listado_de_terceros') }}" class="btn btn-primary">Carteras</a>
            <a href="{{ route('client') }}" class="btn btn-primary">Reportes</a>
            <a href="{{ route('client') }}" class="btn btn-primary">Cartera por pagar</a>
            <a href="{{ route('listado_de_terceros') }}" class="btn btn-primary">Cartera por cobrar</a>
            <a href="{{ route('listado_de_terceros') }}" class="btn btn-primary">Notificar</a>
        </div>
    </div>
@endsection('content')