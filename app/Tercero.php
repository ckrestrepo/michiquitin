<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	//
	protected $table = 'terceros';

    protected $fillable = [
        'nit', 'nombre', 'estado', 'abonos', 'saldo', 'notas'
    ];

}
