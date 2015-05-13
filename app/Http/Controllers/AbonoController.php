<?php namespace App\Http\Controllers;

use App\Abono;
use App\Cartera;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AbonoController extends Controller {


	public function index($cartera_id)
	{
        $cartera = Cartera::find($cartera_id);
        $tercero = $cartera->tercero;

        return \View::make('abonos.mostrar', compact('cartera', 'tercero'));
	}

	public function create($cartera_id)
	{
        $cartera = Cartera::find($cartera_id);
        $tercero = $cartera->tercero;
        $max = $cartera->saldo();

        return \View::make('abonos.crear', compact('cartera', 'tercero', 'max'));
    }

	public function store(Request $request)
	{
        $cartera = new Cartera;

        $v = \Validator::make($request->all(),[
            'cartera_id',
            'forma_pago',
            'cuenta_id',
            'monto',
            'notas',
            'created_at'
        ]);
        if ($v->passes())
        {
            $abono = new Abono();
            $abono->cartera_id	= $request->input('cartera_id');
            $abono->forma_pago	= $request->input('forma_pago');
            $abono->cuenta_id = $request->input('cuenta_id') == 'NULL' ? null : $request->input('cuenta_id');
            $abono->monto = $request->input('monto');
            $abono->notas = $request->input('notas');
            $abono->created_at	= $request->input('created_at');
            $abono->user_id	= Auth::user()->id;
            $abono->save();

            $cartera->create($request->all());
            $carteras = Cartera::all();

            return Redirect::route('mostrar_abonos', ['cartera_id' => $request->input('cartera_id')]);
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($v);
        }
	}

	public function show($id)
	{

	}

	public function edit($id)
	{
        $abono = Abono::find($id);
        $tercero = $abono->cartera->tercero;
        $max = $abono->cartera->saldo() + $abono->monto;

        return \View::make('abonos.editar', compact('abono', 'tercero', 'max'));
	}


	public function update($id)
	{
        $input = Input::only(['id', 'forma_pago', 'cuenta_id', 'monto', 'notas', 'created_at']);
        $validador = Validator::make($input, Abono::rules());

        if ($validador->passes())
        {
            $abono 							= Abono::find($input['id']);
            $abono->forma_pago	= $input['forma_pago'];
            $abono->cuenta_id		= ($input['cuenta_id'] == 'NULL') ? null : $input['cuenta_id'];
            $abono->monto				= $input['monto'];
            $abono->notas				= $input['notas'];
            $abono->created_at	= $input['created_at'];
            $abono->user_id 		= Auth::user()->id;
            $abono->save();

            return Redirect::route('mostrar_abonos', ['cartera_id' => $abono->cartera->id ]);
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validador);
        }
	}


	public function destroy($id)
	{
		//
	}

}
