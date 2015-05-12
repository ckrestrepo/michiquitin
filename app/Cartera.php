<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartera extends Model {

	//
	protected $table = 'carteras';

    protected $fillable = ['documento', 'prefijo', 'fisico', 'pedido', 'valor', 'notas'];
}
