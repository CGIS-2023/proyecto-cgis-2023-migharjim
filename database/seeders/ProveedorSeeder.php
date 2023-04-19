<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Proveedor;

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
                'nombre' => "Mediplus",
                'direccion' => "Calle Agua, 32, Sevilla",
                'email' => "mediplus@gmail.com",
                'telefono' => "654387110"
            ],

            [
                'nombre' => "Cleanplus",
                'direccion' => "Calle Murillo, 2, Sevilla",
                'email' => "cleanplus@gmail.com",
                'telefono' => "654455290"
            ]

            ]);
        $proveedor1 = Proveedor::find(1);
        $proveedor1->objetos()->attach(1, ['precio' => 132.0]);
    }
}
