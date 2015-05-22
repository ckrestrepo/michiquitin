@extends('app')
@section('content')

    <div class="container">
        @if($errors->has())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif </br>
            <div class="row">
                <div class="col col-md-6 col-md-offset-3"   >
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center"><h3 class="panel-title">Agregar nuevo reporte</h3></div>
                            <div class="panel-body">
                            {!! Form::open(['route' => 'client', 'method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::label('nombre', 'Nombre') !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('cedula', 'Cedula') !!}
                                {!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('producto_comprado', 'Producto') !!}
                                {!! Form::text('producto_comprado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('direccion', 'Direccion') !!}
                                {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('telefono', 'Telefono') !!}
                                {!! Form::text('telefono', null, ['class' => 'form-control' ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('tipo', 'Tipo') !!}
                                {!! Form::select('tipo', ['otro' => 'otro', 'empresa' => 'empresa', 'particular' => 'particular'], null, ['class' => 'form-control' ]) !!}
                            </div>

                                <div class="form-group">
                                    {!! Form::label('saldo_anterior', 'Saldo Anterior') !!}
                                    {!! Form::text('saldo_anterior', null, ['class' => 'form-control' ]) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('monto_abonado', 'Abono') !!}
                                    {!! Form::text('monto_abonado', null, ['class' => 'form-control' ]) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('proximo_pago', 'Proximo Pago') !!}
                                    {!! Form::date('proximo_pago', null, ['class' => 'form-control' ]) !!}
                                </div>
                            <div class="form-group">
                                {!! Form::label('registro', 'Numero de registro') !!}
                                {!! Form::text('registro', null, ['class' => 'form-control' ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                                <a href="{{ route('home')}}" class="btn btn-warning">Cancelar</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection