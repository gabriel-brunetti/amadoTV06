<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    // EXIBE TODOS OS PRODUTOS
    public function index()
    {
        // capturar todos os produtos do meu banco de dados
        $produtos = Produto::all();

        return view('teste', compact('produtos'));
    }

    // EXIBE UM PRODUTO EM DETALHES
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
        // Validar o request
        // request pega os valores dos campos do formulário!
        request()->validate(
            [
                // 'campo' => 'regra'
                'nome' => 'required|min:3|max:40',
                'descricao' => 'required',
                'marca' => 'required',
                // gte = greater than or equal (maior ou igual a que)
                // gt = greater than (maior que)
                // lt = less than (menor que)
                // lte = less than or equakl (menor ou igual a que)
                'preco' => 'required|gt:0|lte:999.99',
                'quantidade' => 'required|gt:0|lte:99',
            ]
            );

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

    public function edit($id) {
        $produto = Produto::find($id);

        return view('adminProdutos.edit', compact('produto'));
    }

    public function update($id) {
        
        // Validar o request
        // request pega os valores dos campos do formulário!
        request()->validate(
            [
                // 'campo' => 'regra'
                'nome' => 'required|min:3|max:40',
                'descricao' => 'required',
                // gte = greater than or equal (maior ou igual a que)
                // gt = greater than (maior que)
                // lt = less than (menor que)
                // lte = less than or equakl (menor ou igual a que)
                'preco' => 'required|gt:0|lte:999.99',
                'quantidade' => 'required|gt:0|lte:99',
            ]
            );
        
        // encontrar o produto no banco de dados
        $produto = Produto::find($id);

        // atribuir os valores do formulário ao $produto selecionado
        // BD -> nome das colunas // request -> name do input do formulario
        $produto->nome = request('nome');
        $produto->descricao = request('descricao');
        $produto->quantidade = request('quantidade');
        $produto->preco = request('preco');
       
        $produto->save();

        return redirect('/admin/produtos/');
    }

    public function destroy($id){
        // Carregando o produto da base de dados
        // $produto = Produto::find($id);

        // Remover elemento do Bando de Dado
        // $produto->delete();

        //Deletando o produto
        Produto::find($id)->delete();

        return redirect('/admin/produtos/');
    }
}
