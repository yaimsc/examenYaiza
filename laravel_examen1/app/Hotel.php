<?php

namespace App;
use App\Cliente; 
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   public function clientes(){
   	return $this->belongsToMany('App\Cliente')->withPivot('fecha', 'numhabitaciones'); 
   }
}
