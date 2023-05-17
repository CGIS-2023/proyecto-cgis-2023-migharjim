<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstadoPeticionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_peticions')->insert([

            [
                'nombre' => "Pendiente",
            ],
    
            [
                'nombre' => "Cancelada",
            ],
    
            [
                'nombre' => "Aceptada",
            ],

        ]);
    }
}
