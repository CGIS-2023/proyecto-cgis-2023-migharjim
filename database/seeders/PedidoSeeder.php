<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
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
                'id_pedido' => null,
                'fecha' => "Calle Agua, 32, Sevilla",
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
    }
    
}
