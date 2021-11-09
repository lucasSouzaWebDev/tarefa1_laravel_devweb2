<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarefa1Controller extends Controller
{
    public function index()
    {
        return view('tarefa1');
    }

    public function questao1(Request $request)
    {
        $notas = $request->post('nota');
        $notaFinal = 0;
        foreach ($notas as $nota){
            $notaFinal += $nota;
        }
        
        $media = ($notaFinal / count($notas)) >= 7.0;
        return view('resultado', compact('media'));
    }
}