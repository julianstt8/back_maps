<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class coordenadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('map_coordenadas')->insert([
            'latitud' => '6.3411316',
            'longitud' => '-75.5733084'
        ]);
    }
}
