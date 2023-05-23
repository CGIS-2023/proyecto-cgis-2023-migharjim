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
                'direccion' => "Calle Perdiz, 2, Sevilla",
                'email' => "cleanplus@gmail.com",
                'telefono' => "654455290"
            ],
            [
                'nombre' => "FarmaSalud",
                'direccion' => "Calle Gorrion, 30, Sevilla",
                'email' => "farmasalud@gmail.com",
                'telefono' => "543209114"
            ],

            [
                'nombre' => "LimpiaMas",
                'direccion' => "Calle Valdes Leal, 1, Sevilla",
                'email' => "limpiaMas@gmail.com",
                'telefono' => "678835210"
            ],
            [
                'nombre' => "Wurth",
                'direccion' => "Calle Los Remedios, 23, Sevilla",
                'email' => "wurth@gmail.com",
                'telefono' => "682123471"
            ],



            ]);
        $proveedor1 = Proveedor::find(1);
        $proveedor1->objetos()->attach(1, ['precio' => 5.0]);

        $proveedor1 = Proveedor::find(1);
        $proveedor1->objetos()->attach(2, ['precio' => 22.0]);

        $proveedor1 = Proveedor::find(1);
        $proveedor1->objetos()->attach(3, ['precio' => 10.0]);


        $proveedor2 = Proveedor::find(2);
        $proveedor2->objetos()->attach(6, ['precio' => 4.0]);

        $proveedor2 = Proveedor::find(2);
        $proveedor2->objetos()->attach(7, ['precio' => 1.0]);

        $proveedor2 = Proveedor::find(2);
        $proveedor2->objetos()->attach(8, ['precio' => 10.0]);


        $proveedor3 = Proveedor::find(3);
        $proveedor3->objetos()->attach(1, ['precio' => 2.0]);

        $proveedor3 = Proveedor::find(3);
        $proveedor3->objetos()->attach(2, ['precio' => 20.0]);

        $proveedor3 = Proveedor::find(3);
        $proveedor3->objetos()->attach(3, ['precio' => 12.0]);

        $proveedor4 = Proveedor::find(4);
        $proveedor4->objetos()->attach(6, ['precio' => 3.0]);

        $proveedor4 = Proveedor::find(4);
        $proveedor4->objetos()->attach(7, ['precio' => 3.0]);

        $proveedor4 = Proveedor::find(4);
        $proveedor4->objetos()->attach(8, ['precio' => 15.0]);

        $proveedor5 = Proveedor::find(5);
        $proveedor5->objetos()->attach(4, ['precio' => 2.0]);

        $proveedor5 = Proveedor::find(5);
        $proveedor5->objetos()->attach(5, ['precio' => 4.0]);

        $proveedor5 = Proveedor::find(5);
        $proveedor5->objetos()->attach(10, ['precio' => 20.0]);

    }
}
