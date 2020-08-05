<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagemProduto extends Model
{
    // Adicionando relacionamento 1:n com Produto
    public function produto() {
        return $this->belongsTo('App\Produto');           
    }
}
