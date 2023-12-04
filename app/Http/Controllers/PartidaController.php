<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function exibir(){
        return view("partida/index");
    }
    public function save(string $acertos, string $erros)
    {
        return response()->json([
            'acertos' => $cidade,
            'erros' => $erros
        ]);
        $jogador = Session::get('jogador');
        
        $jogador::criarPartida($acertos, $erros);

    }
}
