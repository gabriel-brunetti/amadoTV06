<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        // capturar todos os produtos do meu banco de dados
        $produtos = Produto::all();

        return view('teste', compact('produtos'));
    }

    public function show($id)
    {
       $produto = Produto::find($id);

       return view('testeDetalhes', compact('produto'));
    }

    public function create()
    {
        return view('adminProdutos.create');
    }

    public function store()
    {
        // criando um novo elemento da classe Produto
        $produto = new Produto;

        // atribuir os valores do formulário ao $produto criado
        // BD -> nome das colunas // request -> name do input do formulario
        $produto->nome = request('nome');
        $produto->marca = request('marca');
        $produto->descricao = request('descricao');
        $produto->quantidade = request('quantidade');
        $produto->preco = request('preco');
       
        $produto->save();

        return redirect('/admin/produtos/');
    }
}
