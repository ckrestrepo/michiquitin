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
                        <div class="panel-heading"><h3 class="panel-title">Formulario de registro</h3></div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'guardar_tercero', 'method' => 'post']) !!}

                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!!Form::text('nit', null, ['class'=>'form-control floating-label', 'placeholder' => 'Nit', 'required', 'maxlength' => '255'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre', 'required', 'maxlength' => '255'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::text('direccion', null, ['placeholder' => 'Dirección', 'class' => 'form-control floating-label', 'maxlength' => '255'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::text('telefono', null, ['placeholder' => 'Teléfono', 'class' => 'form-control floating-label', 'maxlength' => '255'])!!}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!!Form::email('email', null, ['placeholder' => 'Correo electrónico', 'class' => 'form-control floating-label', 'required', 'maxlength' => '255'])!!}
                                </div>
                                <div class="form-group">
                                    {!!Form::textarea('notas', null, ['placeholder' => 'Notas', 'class' => 'form-control floating-label','rows' => '10', 'maxlength' => '1000'])!!}
                                </div>
                            </div>

                            <div class="col">
                                <div class="col-xs-3 col-xs-offset-6 text-right">
                                    {!!Form::submit('Guardar', ['class' => 'btn btn-success'])!!}
                                </div>


                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection