@extends('app')

@section('content')
    <div class="container">
        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif
        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif
        @include('partials.cartera_buscar_form')
        @if(Session::has('mensaje'))
            <div class="alert alert-info">
                <p>{{Session::get('mensaje')}}</p>
            </div>
        @endif
        <div class="row">
            <h4>Estado del cliente: Christian Camilo Restrepo L</h4>
                <div class="col-md-7">
                    <table class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Factura</th>
                            <th>Saldo Anterior</th>
                            <th>Saldo Restante</th>
                            <th>Proximo Pago</th>
                        </tr>
                        </thead>
                    </table>
                    <h3>Abonos realizados por: </h3>
                    <a href="{{ route('mostrar_abonos') }}"type="button" class="btn btn-success">Abonos</a>
                </div>
        </div>
    </div>
@endsection