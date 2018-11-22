<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class reservaController extends Controller
{
    public function index($id){
    	$cliente = Cliente::find($id); 
    	return view('reserva.list', ['cliente' => $cliente]); 	
    }
}
