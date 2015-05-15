<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartera extends Model {

	//
	protected $table = 'carteras';

    protected $fillable = ['nombre', 'factura', 'saldo_anterior', 'saldo_restante', 'proximo_pago'];
}
