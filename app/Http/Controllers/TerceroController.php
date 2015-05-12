<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tercero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class TerceroController extends Controller {

	public function index()
	{
        return $this->listado();
	}

	public function create()
	{
        return view('terceros.crear');
	}

	public function store(Request $request)
    {
        $tercero = new Tercero;

        $v = \Validator::make($request->all(),[

            'cedula' => 'required|unique',
            'nombre'  => 'required',
            'direccion'  => 'required',
            'telefono'  => 'required',
            'email'  => 'required|email|unique:terceros',
        ]);

        if($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $tercero->create($request->all());
        $tercero = Tercero::all();
        return View('terceros.listado'); //, compact('terceros'));
	}

	public function show($id)
	{

	}

	public function edit($id)
	{

	}

	public function update($id)
	{

	}

	public function destroy($id)
	{

	}

}
