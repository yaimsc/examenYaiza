<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class clientesController extends Controller
{
    public function index(){
    	$clientes = Cliente::all();
    	return view('cliente.index', ['clientes' => $clientes]); 
    }

    public function create(Request $request){
    	$cliente = new Cliente; 

    	$cliente = DB::table('clientes')->insert([
    		'nif' => $request->input('nif'),
    		'nombre' => $request->input('nombre'), 
    		'apellido' => $request->input('apellido'), 
    		'telefono' => $request->input('telefono'), 
    	]); 

    	return view('enunciado'); 
    	
    }

    public function get($id){
    	$cliente = Cliente::find($id); 
    	return view('reserva.list', ['cliente' => $cliente]); 
    }
}
