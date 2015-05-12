<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	//
	protected $table = 'terceros';

    protected $fillable = [
        'cedula', 'nombre', 'direccion', 'telefono', 'email', 'estado', 'notas'
    ];

}
