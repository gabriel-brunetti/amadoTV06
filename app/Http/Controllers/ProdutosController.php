<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\ImagemProduto;

class ProdutosController extends Controller
{
    public function index(){
        // capturar todos os produtos do meu banco de dados
        $produtos = Produto::all();
        $imagensProdutos = ImagemProduto::all();

        return view('teste', compact('produtos', 'imagensProdutos'));
    }
}
