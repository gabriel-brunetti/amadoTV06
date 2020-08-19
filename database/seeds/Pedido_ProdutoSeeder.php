<?php

use Illuminate\Database\Seeder;

class Pedido_ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) { 
        DB::table('pedido_produto')->insert(
            [
                'pedido_id' => rand(1,10),
                'produto_id' => rand(1,10)
            ]
            );
        };
    }
}
