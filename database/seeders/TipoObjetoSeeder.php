<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TipoObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_objetos')->insert([

        [
            'nombre' => "Sanitario",
        ],

        [
            'nombre' => "Limpieza",
        ],

        [
            'nombre' => "Mantenimiento",
        ],
    ]);
    }
}
