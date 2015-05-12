@extends('app')

@section('content')

    <div class="panel-heading"><h3 class="panel-title">Forumulario de Registro de Terceros</h3></div>

    {!! Form::open(['route' => 'terceros', 'method' => 'post']) !!}

        @include('partials.tercero_form')

        @include('partials.btn_guardar_cancelar')

    {!! Form::close() !!}
@endsection