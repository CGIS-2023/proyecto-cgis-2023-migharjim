<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objetos')->insert([
            [
                'nombre' => "suero",
                'precio' => 32.0,
                'tipo_objeto_id' =>1

            ],

            [
                'nombre' => "Jeringuilla",
                "precio" => 3.9,
                'tipo_objeto_id' =>1

                
            ],
            [
                'nombre' => "Gasa",
                "precio" => 1.9,
                'tipo_objeto_id' =>1

            ],

            ]);
    }
}
