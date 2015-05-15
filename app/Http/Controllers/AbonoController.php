<?php namespace App\Http\Controllers;

use App\Abono;
use App\Cartera;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AbonoController extends Controller {


	public function index()
	{
        return view('abonos.mostrar');
	}
}
