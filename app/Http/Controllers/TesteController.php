<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function exibir($numero)
    {
        $nome = 'Lucas';
        $html = "<hr>";
        $frutas = Array('teste', 'teste2');
        return view("aula1", compact('nome', 'frutas', 'numero', 'html'));
    }

    public function getNumbers(Request $request)
    {
        $data = $request->all();
        
    }
}
