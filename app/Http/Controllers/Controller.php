<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $categorias = DB::table('categorias')->get();

        $produtos = DB::table('produtos')
        ->join('categorias', 'categorias.id', '=', 'produtos.categoria_id')
        ->get($columns = ['categorias.descricao as categoria', 'produtos.descricao', 'produtos.id', 'produtos.preco'] );

        

        

        return view('welcome', ['categorias' => $categorias, 'produtos' => $produtos]);
    }
}
