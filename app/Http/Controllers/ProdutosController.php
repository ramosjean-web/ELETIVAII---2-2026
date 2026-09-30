<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos:: all();
        return view('produtos.index', compact('produtos'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Produtos::create($request->all()))
        return redirect()->route('/produtos.index')->with ('mensagem', 'Produto adicionado com sucesso!');
        else redirect()->route('/produtos.index')->with('mensagem', ' ERRO ao inserir o produto');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produtos = Produtos::findoRFail($id);
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $produtos = Produtos::findoRFail($id);
        return view('produtos.edit', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produtos = Produtos::findOrfail($id);
        if($produtos->update($request->all()))
            return redirect()->route('/produtos.index')->with('mensagem', 'Produto Alterados com sucesso!');
        else
            return redirect()->route('/produtos.index')->with('mensagem', 'Erro Alterados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produtos = Produtos::findOrfail($id);
        if($produtos->delete())
            return redirect()->route('/produtos.index')->with('mensagem', 'Produto Excluido com sucesso!');
        else
             return redirect()->route('/produtos.index')->with('mensagem', 'Erro ao Excluir Produto!');
    }
}
