<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('almacens')->insert([
            [
                'nombre' => 'poligono',
                'direccion' => 'Calle Agua, Sevilla'

            ],
            
        ]);
    }
}
