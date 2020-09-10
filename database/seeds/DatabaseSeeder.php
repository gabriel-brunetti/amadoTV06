<?php

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
        $this->call(UserSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(Pedido_ProdutoSeeder::class);
        $this->call(Roles_UsersSeeder::class);
    }
}
