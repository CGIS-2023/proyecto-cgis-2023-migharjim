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
                'nombre' => "Administrador1",
                'apellido' => "Administrador ",
                'email' => "administrador@administrador.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Encargado 1",
                'apellido' => "Encargado ",
                'email' => "encargado1@encargado.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Encargado 2",
                'apellido' => "Encargado ",
                'email' => "encargado2@encargado.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Gestor 1",
                'apellido' => "Gestor ",
                'email' => "gestor1@gestor.com",
                'password' => Hash::make('12345678'),
            ],
            [
                'nombre' => "Gestor 2",
                'apellido' => "Gestor ",
                'email' => "gestor2@gestor.com",
                'password' => Hash::make('12345678'),
            ]
        ]);
    }
}