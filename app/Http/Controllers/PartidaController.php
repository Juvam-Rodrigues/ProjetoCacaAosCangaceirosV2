<?php

namespace App\Http\Controllers;
use App\Models\Jogador;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function exibir(){
        return view("partida/index");
    }

    public function save(Request $request)
    {
        
            $jogador->criarPartida($request->query('acertos'), $request->query('erros'));
            return redirect("/partidas");
    }
}
