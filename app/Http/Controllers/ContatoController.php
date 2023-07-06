<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index (){
        return view("site.contato");
    }
    public function print(
        Request $request,
        string $nome,
        int $categoria_id
    ){

        return $nome;
    }
}
