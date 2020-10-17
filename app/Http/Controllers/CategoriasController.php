<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriasController extends Controller
{
    public function store(Request $request)
    {
        $categoria = new Categorias();
        $categoria->descricao = $request->descricao;
        $categoria->save();

        return Redirect::to('/');
    }
}
