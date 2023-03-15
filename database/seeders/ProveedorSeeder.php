<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedors')->insert([
            [
                'nombre_Empresa' => "Mediplus",
                'direccion' => "Calle Agua, 32, Sevilla",
                'email' => "mediplus@gmail.com",
                'telefono' => "654387110"
            ],

            [
                'nombre_Empresa' => "Cleanplus",
                'direccion' => "Calle Murillo, 2, Sevilla",
                'email' => "cleanplus@gmail.com",
                'telefono' => "654455290"
            ]









            ]);
    }
}
