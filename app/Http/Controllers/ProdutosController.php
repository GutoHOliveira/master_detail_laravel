<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutosController extends Controller
{
    public function store(Request $request){
        $produto = new Produtos();
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->categoria_id = $request->categoria;
        $produto->save();

        return Redirect::to('/');

    }
}
