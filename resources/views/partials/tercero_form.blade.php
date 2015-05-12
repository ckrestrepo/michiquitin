<div class="col-sm-6">
    <div class="form-group">
        {!!Form::text('cedula', null, ['class'=>'form-control floating-label', 'placeholder' => 'Cedula', 'required', 'maxlength' => '255'])!!}
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