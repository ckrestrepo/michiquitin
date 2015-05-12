<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientController extends Controller {

	public function index()
	{
        return \View::make('form');
	}

	public function create()
	{

	}

	public function store()
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
