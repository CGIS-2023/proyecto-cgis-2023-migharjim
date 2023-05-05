<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TipoObjetoSeeder::class,ObjetoSeeder::class, EncargadoSeeder::class, ProveedorSeeder::class, PedidoSeeder::class, UserSeeder::class
        ]);
    }
}
