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
                'nombre' => "Suero",
                'precio' => 32.0,
                'tipo_objeto_id' =>1,
                'cantidad'=> 2,
                'almacen_id'=>1,

            ],

            [
                'nombre' => "Jeringuilla",
                "precio" => 3.9,
                'tipo_objeto_id' =>1,
                'cantidad'=> 1,
                'almacen_id'=>1,


                
            ],
            [
                'nombre' => "Gasa",
                "precio" => 1.9,
                'tipo_objeto_id' =>1,
                'cantidad'=> 6,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Caja de tornillos",
                "precio" => 1.9,
                'tipo_objeto_id' =>3,
                'cantidad'=> 2,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Destornillador",
                "precio" => 5,
                'tipo_objeto_id' =>3,
                'cantidad'=> 1,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Botella de lejía",
                "precio" => 1.9,
                'tipo_objeto_id' =>2,
                'cantidad'=> 8,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Fregona",
                "precio" => 3,
                'tipo_objeto_id' =>2,
                'cantidad'=> 9,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Cepillo",
                "precio" => 3,
                'tipo_objeto_id' =>2,
                'cantidad'=> 5,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "Guantes",
                "precio" => 1.9,
                'tipo_objeto_id' =>2,
                'cantidad'=> 18,
                'almacen_id'=>1,


            ],

            [
                'nombre' => "LLave inglesa",
                "precio" => 15,
                'tipo_objeto_id' =>3,
                'cantidad'=> 10,
                'almacen_id'=>1,


            ],


            ]);
    }
}
