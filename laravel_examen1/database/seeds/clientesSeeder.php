<?php

use Illuminate\Database\Seeder;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
        	DB::table('clientes')->insert([
        		'nif' => '12345678' . str_random(1), 
        		'nombre' => 'cliente' . str_random(1), 
        		'apellido' => 'apellido'.str_random(1), 
        		'telefono' => '94351152'.random_int(0, 9),
        	]);
        }
    }
}
