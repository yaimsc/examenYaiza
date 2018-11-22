<?php

use Illuminate\Database\Seeder;

class hotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
        	DB::table('hotels')->insert([
        		'nombre' => 'hotel'.random_int(1, 5), 
        		'direccion' => 'direccion'.str_random(3), 
        		'categoria' => random_int(1,5), 
        		'completo' => random_int(0, 1),
        		'antiguedad' => random_int(1,5), 
        	]);
        }
    }
}
