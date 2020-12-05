<?php

namespace App\Http\Controllers;

use App\Models\Prudoto;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProdutoController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Prudoto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        
        return "Produto criado com sucesso!";
    }

    public function show($id){
        $produto = Prudoto::findOrFail($id);
        return view('produtos.show',['produto' => $produto]);
    }

    public function edit($id){
        $produto = Prudoto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){

        $produto = Prudoto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        
        return "Produto atualizado com sucesso!";
    }

    public function delete($id){
        $produto = Prudoto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id){
        $produto = Prudoto::findOrFail($id);
        $produto->delete();

        return "Produto excluído com sucesso!";
    }
}
