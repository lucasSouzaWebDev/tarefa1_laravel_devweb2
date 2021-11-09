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

    public function questao2(Request $request)
    {
        $mes = ($request->post('mes') - 1);
        $arrayMes = array(
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro',
        );

        $resultado = isset($arrayMes[$mes]) ? $arrayMes[$mes] : 'Não existe mês nesse número.';
        return view('resultado', compact('resultado'));
    }

    public function questao3(Request $request)
    {
        $valoresAsc = $request->post('valores');
        rsort($valoresAsc);        
        return view('resultado', compact('valoresAsc'));
    }

    public function questao4(Request $request)
    {
        $valoresDesc = $request->post('valores');
        sort($valoresDesc);        
        return view('resultado', compact('valoresDesc'));
    }

    public function questao5(Request $request)
    {
        $notas = $request->post('nota');
        $notaFinal = 0;
        foreach ($notas as $nota){
            $notaFinal += $nota;
        }
        
        $media = ($notaFinal / count($notas)) >= 7.0;
        return view('resultado', compact('media'));
    }

    public function questao6(Request $request)
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