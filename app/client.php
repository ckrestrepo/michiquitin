<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $table = 'clients';
    //Definimos los campos que se pueden llenar con asignación masiva
    protected $fillable = ['nombre', 'cedula', 'producto_comprado', 'email', 'direccion', 'registro','telefono','tipo', 'saldo_anterior',
        'monto_abonado','proximo_pago' ];

}
