<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            [
                'encargado_id' => 1,
                'proveedor_id' => 1,
                'gestor_id' => 1,
                'fecha_emision' => "2012-01-01",
                'fecha_recepcion' => "2032-01-01",
                'estado_peticion_id' => 1

            ],

            [
                'encargado_id' => 2,
                'proveedor_id' => 1,
                'gestor_id' => 2,
                'fecha_emision' => "2011-01-01",
                'fecha_recepcion' => "2032-01-01",
                'estado_peticion_id' => 1

            ],
            [
                'encargado_id' => 2,
                'proveedor_id' => 4,
                'gestor_id' => 1,
                'fecha_emision' => "2012-03-01",
                'fecha_recepcion' => "2032-01-05",
                'estado_peticion_id' => 1

            ],

            [
                'encargado_id' => 2,
                'proveedor_id' => 2,
                'gestor_id' => 2,
                'fecha_emision' => "2011-01-01",
                'fecha_recepcion' => "2032-01-01",
                'estado_peticion_id' => 1

            ],
            [
                'encargado_id' => 1,
                'proveedor_id' => 5,
                'gestor_id' => 1,
                'fecha_emision' => "2012-01-09",
                'fecha_recepcion' => "2012-02-07",
                'estado_peticion_id' => 1

            ],

            [
                'encargado_id' => 2,
                'proveedor_id' => 2,
                'gestor_id' => 1,
                'fecha_emision' => "2021-10-01",
                'fecha_recepcion' => "2022-11-01",
                'estado_peticion_id' => 1

            ],

            ]);
    }
    
}
