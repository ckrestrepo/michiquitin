<?php namespace App\Http\Controllers;

use App\Cartera;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CarteraController extends Controller {

    public function buscar()
    {
        $input = Input::only(['campo', 'buscar']);
        $palabras = explode(' ', $input['buscar']);
        $listado= DB ::table('carteras')
            ->where('nombre', '=', $palabras)
            -> get();
        return \View::make('carteras.listado', compact('listado'));

    } #buscar


}
