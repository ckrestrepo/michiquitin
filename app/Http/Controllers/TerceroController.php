<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tercero;
use Illuminate\Http\Request;

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

        $v = \Validator::make($request->all(), [

            'cedula' => 'required|unique',
            'nombre'  => 'required',
            'direccion'  => 'required',
            'telefono'  => 'required',
            'email'  => 'required|email|unique:terceros',
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $tercero->create($request->all());
        $terceros = Tercero::all();
        return \Redirect::route('mostrar_tercero', ['id' => $tercero->id]);
        //return \View::make('terceros.listado', compact('terceros'));
	}

	public function show($id)
	{
        $tercero = Tercero::find($id);

        return \View::make('terceros.mostrar', compact('tercero'));
	}

	public function edit($id)
	{
        $tercero = Tercero::find($id);

        return \View::make('terceros.editar',compact('tercero'));
	}

	public function update($id)
	{

	}

	public function destroy($id)
	{

	}

    public function listado($terceros = null)
    {
        if (is_null($terceros))
        {
            $terceros = Tercero::orderBy('nombre', 'ASC')->paginate();
        }

        return \View::make('terceros.listado', compact('terceros'));
    } #listado

}
