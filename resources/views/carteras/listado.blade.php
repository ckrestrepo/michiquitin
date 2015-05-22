@extends('app')

@section('content')
    <div class="container">
        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif
        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif
        @if(Session::has('mensaje'))
            <div class="alert alert-info">
                <p>{{Session::get('mensaje')}}</p>
            </div>
        @endif

            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-sm-8">
                        {!! Form::open(['route' => 'buscar_factura', 'role' => 'form', 'method' => 'GET']) !!}
                        <div class="input-group">
                            {!!Form::text('buscar', null, ['placeholder' => 'Ingrese el numero de la factura', 'class' => 'form-control', 'autofocus'])!!}
                            <div class="input-group-btn">
                                {!!Form::submit('Buscar', ['class' => 'btn btn-primary'])!!}
                            </div>
                        </div> {{-- /.input-groupda --}}
                        {!!Form::close()!!}
                    </div> {{-- /.col-sm-8 --}}
                </div> {{-- /.panel-body --}}
            </div> {{-- /.panel --}}


        <div class="row">
            <h4>Estado del cliente: </h4>
                <div class="col-md-7">
                    <table class="table table-condensed table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Factura</th>
                            <th>Saldo Anterior</th>
                            <th>Abono</th>
                            <th>Saldo Restante</th>
                            <th>Proximo Pago</th>
                        </tr>
                        </thead>
                    </table>
                    {{--<tbody>
                    @foreach($carteras as $client)
                        <tr>
                            <td>{{ $client->factura}}</td>
                            <td>{{ $client->saldo_anterior }}</td>
                            <td>{{ $client->saldo_restante }}</td>
                            <td>{{ $client->proximo_pago }}</td>
                        </tr>
                    @endforeach
                    </tbody>--}}
                </div>
        </div>
    </div>
@endsection