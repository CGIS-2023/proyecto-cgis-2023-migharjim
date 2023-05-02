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
                'fecha_emision' => "2012-01-01",
                'fecha_recepcion' => "2032-01-01",
            ],

            [
                'fecha_emision' => "2007-01-01",
                'fecha_recepcion' => "2000-01-01"
            ]


            ]);
    }
    
}
