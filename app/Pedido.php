<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // fillable do model Pedido
    protected $fillable = ['user_id'];
    
    // Adicionando relacionamento 1:n com User
    public function user()
    {
        return $this->belongsTo('App\User');           
    }

    // Adicionando relacionamento n:n com Pedido
    public function produtos()
    {
        return $this->belongsToMany('App\Produto', 'pedidos_produtos');           
    }
}
