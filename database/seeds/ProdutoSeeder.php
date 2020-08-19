<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
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
            DB::table('produtos')->insert(
                [
                'nome' => Str::random(9),
                'descricao' => Str::random(20),
                'marca' => Str::random(5),
                'quantidade' => rand(5,50),
                'preco' => rand(10, 999.99),
                ]
            );
        }
    }
}
