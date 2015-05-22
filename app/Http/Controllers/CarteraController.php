<?php namespace App\Http\Controllers;

use App\Cartera;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CarteraController extends Controller
{

    public function buscar()
    {
        /*
        $input = Input::only(['campo', 'buscar']);

        $palabras = explode(' ', $input['buscar']);

        $carteras = Cartera::select(['id', 'factura', 'saldo_anterior', 'saldo_restante', 'proximo_pago']);

        foreach ($palabras as $palabra) {
            $carteras->where($input['campo'], 'like', '%' . $palabra . '%');
        }

        $carteras = $carteras->orderBy('nombre', 'ASC')->paginate();

        Session::flash('mensaje', 'Resultados con ' . $input['campo'] . $input['buscar']);

        return $this->listado($carteras);*/
        return view('carteras.listado');
    } #buscar

    public function listado($carteras = null)
    {
        if (is_null($carteras)) {
            $carteras = Cartera::orderBy('nombre', 'ASC')->paginate();
        }

        return \View::make('carteras.listado', compact('carteras'));
    } #listado

    public function notificar()
    {
        dd('Seccion de notificacion');
    } #listado

    public function pagos()
    {
        dd('Area de Cartera por pagar');
    } #listado
}
