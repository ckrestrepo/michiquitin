@extends('app')

@section('content')

    <h1> Registrar Tercero</h1>
    {!! Form::open(['route' => 'terceros.store']) !!}

        @include('partials.tercero_form')

        @include('partials.btn_guardar_cancelar')

    {!! Form::close() !!}
@endsection