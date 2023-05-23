<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nombre' => "Alejandra",
                'apellido' => "González ",
                'email' => "administrador@administrador.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Pepe",
                'apellido' => "Ruíz ",
                'email' => "encargado1@encargado.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Mario",
                'apellido' => "Aguilar ",
                'email' => "encargado2@encargado.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Marta",
                'apellido' => "Cruz ",
                'email' => "gestor1@gestor.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Lola",
                'apellido' => "García ",
                'email' => "gestor2@gestor.com",
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}