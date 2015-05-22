<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\client;
use Illuminate\Http\Request;



class ClientController extends Controller {

	public function index()
	{
        return view('form');
        //dd('INDEX');
	}

	public function create()
	{
        return view('form');
	}

	public function store(Request $request)
	{
        $client = new Client;

        $v = \Validator::make($request->all(), [

            'nombre' => 'required',
            'cedula' => 'required',
            'producto_comprado'=>'required',
            'email'    => 'required|email|unique:clients',
            'direccion' => 'required',
            'telefono' => 'required',
            'tipo' => 'required|in:empresa,particular',
            'registro' => 'required_if:type,empresa',
            'saldo_anterior' => 'required',
            'monto_abonado' => 'required',
            'proximo_pago' => 'required'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $client->create($request->all());
        $clients = Client::all();
        return \View::make('list', compact('clients'));
	}

	public function show()
	{
        $clients = Client::all();
        return \View::make('list', compact('clients'));
	}
}
