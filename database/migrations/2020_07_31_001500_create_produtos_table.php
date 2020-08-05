<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('marca');
            $table->integer('quantidade');
            $table->decimal('preco', 5,2); // 'nomeDaTabela', qtdDeDigitos, qntosDigitosDepoisDaVirgula -> 5 dígitos
            // sendo 2 depois da virgula, então o máximo que o meu sistema vai armazenar de preço é 999,99
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
