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

    <div class="panel-heading"><h3 class="panel-title">Forumulario de Registro de Terceros</h3></div>

    {!! Form::open(['route' => 'terceros', 'method' => 'post']) !!}

        @include('partials.tercero_form')

        @include('partials.btn_guardar_cancelar')

    {!! Form::close() !!}
</div>
@endsection