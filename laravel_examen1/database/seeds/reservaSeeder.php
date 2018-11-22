<?php

use Illuminate\Database\Seeder;

class reservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++){
        	DB::table('cliente_hotel')->insert([
        		'cliente_id' => random_int(1, 5), 
        		'hotel_id' => random_int(1,5),
        		'fecha' => '2018-'.random_int(1, 12).'-'.random_int(1, 30), 
        		'numhabitaciones' => random_int(1, 3), 
        	]);
        }
    }
}
