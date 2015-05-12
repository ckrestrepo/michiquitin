@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @include('partials.tercero_menu')
        </div>

        <div class="col-md-10">

            <h1>Editar tercero</h1>

            {!!Form::model($tercero, ['route' => 'actualizar_tercero', 'role' => 'form'])!!}

            {!!Form::hidden('id', $tercero->id)!!}

            @include('partials.tercero_form')

            @include('partials.btn_guardar_cancelar')

            {!!Form::close()!!}
        </div>
    </div>{{-- /.row --}}
@stop