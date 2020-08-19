<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Fillables
    protected $fillable = ['nome', 'descricao', 'marca', 'quantidade','preco'];

    // Adicionando relacionamento 1:n com ImagemProduto
    public function imagemProdutos()
    {
        return $this->hasMany('App\ImagemProduto');           
    }

    // Adicionando relacionamento n:n com Pedidos
    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido');           
    }
}
