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

            'full_name' => 'required',
            'address' => 'required',
            'email'    => 'required|email|unique:clients',
            'phone_number' => 'required',
            'type' => 'required|in:empresa,particular',
            'register' => 'required_if:type,empresa'
        ]);

        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $client->create($request->all());
        $clients = Client::all();
        return \View::make('list', compact('clients'));
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}
