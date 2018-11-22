<?php

namespace App;
use App\Hotel; 

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function hotels(){
    	return $this->belongsToMany('App\Hotel')->withPivot('fecha', 'numhabitaciones');
    }
}
