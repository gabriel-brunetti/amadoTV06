<?php

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
        //
        for ($i=0; $i < 10 ; $i++) { 
            DB::table('pedidos')->insert([
                'user_id' => rand(1,10),
            ]);
        }
        
    }
}
