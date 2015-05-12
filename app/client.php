<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model {

    protected $table = 'clients';
    //Definimos los campos que se pueden llenar con asignación masiva
    protected $fillable = ['full_name', 'email', 'address', 'register','phone_number','type'];

}
