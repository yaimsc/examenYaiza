<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Illuminate\Support\Facades\DB;

class hotelsController extends Controller
{
    public function get(){
    	$hotels = DB::table('hotels')->select('*')
    						->where('categoria', '=', '1')
    						->get(); 

    	return view('hotel.index', ['hotels' => $hotels]); 
    }
}
