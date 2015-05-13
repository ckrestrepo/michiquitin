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
                            {!! Form::open(['route' => 'client', 'method' => 'post']) !!}

                            <div class="form-group">
                                {!! Form::label('full_name', 'Nombre') !!}
                                {!! Form::text('full_name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'E-Mail') !!}
                                {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Direccion') !!}
                                {!! Form::text('address', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone_number', 'Telefono') !!}
                                {!! Form::text('phone_number', null, ['class' => 'form-control' ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('type', 'Tipo') !!}
                                {!! Form::select('type', ['otro' => 'otro', 'empresa' => 'empresa', 'particular' => 'particular'], null, ['class' => 'form-control' ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('register', 'Numero de registro') !!}
                                {!! Form::text('register', null, ['class' => 'form-control' ]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection