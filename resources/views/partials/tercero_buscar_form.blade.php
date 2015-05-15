<div class="panel panel-default">
    <div class="panel-body">

        <div class="col-sm-8">
            {!! Form::open(['route' => 'buscar_tercero', 'role' => 'form', 'method' => 'GET']) !!}

            <div class="input-group">

					<span class="input-group-addon">
						<input type="radio" name="campo" value="nit" /> NIT
					</span>

					<span class="input-group-addon">
						<input type="radio" name="campo" value="nombre" checked /> Nombre
					</span>

                {!!Form::text('buscar', null, ['placeholder' => 'Buscar', 'class' => 'form-control', 'autofocus'])!!}

                <div class="input-group-btn">
                    {!!Form::submit('Buscar', ['class' => 'btn btn-primary'])!!}
                </div>

            </div> {{-- /.input-groupda --}}

            {!!Form::close()!!}

        </div> {{-- /.col-sm-8 --}}
    </div> {{-- /.panel-body --}}
</div> {{-- /.panel --}}