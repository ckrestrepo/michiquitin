<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tercero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class TerceroController extends Controller {

	public function index()
	{
        //return view('carteraPrincipal');
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

            'nit' => 'required',
            'nombre'  => 'required',
            'direccion'  => 'required',
            'telefono'  => 'required',
            'email'  => 'required|email|unique:terceros',
            'estado'  => 'required',
            'notas'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $tercero->create($request->all());
        $terceros = Tercero::all();
        //return \Redirect::route('mostrar_tercero', ['id' => $tercero->id]);
        return \View::make('terceros.listado', compact('terceros'));
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

    public function buscar()
    {
        $input = Input::only(['campo', 'buscar']);

        $palabras = explode(' ', $input['buscar']);

        $terceros = Tercero::select(['id', 'nit', 'nombre']);

        foreach ($palabras as $palabra)
        {
            $terceros->where($input['campo'], 'like', '%'. $palabra .'%');
        }

        $terceros = $terceros->orderBy('nombre', 'ASC')->paginate();

        Session::flash('mensaje', 'Resultados con '. $input['campo'] . $input['buscar']);

        return $this->listado($terceros);
    } #buscar

}
