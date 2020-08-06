<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function index(){
        // capturar todos os produtos do meu banco de dados
        $produtos = Produto::all();

        return view('teste', compact('produtos'));
    }

    public function show($id){
       $produto = Produto::find($id);

       return view('testeDetalhes', compact('produto'));
    }
}
