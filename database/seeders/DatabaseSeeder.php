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
            UserSeeder::class,EncargadoSeeder::class, GestorSeeder::class,TipoObjetoSeeder::class,AlmacenSeeder::class, ObjetoSeeder::class,  ProveedorSeeder::class, EstadoPeticionSeeder::class, PedidoSeeder::class
        ]);
    }
}
