<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function exibir(){
        return view("partida/index");
    }
    public function exibirPreJogo(){
        return view("partida/prejogo");
    }
    public function exibirRanking(){
        return view("partida/table");
    }
    

    public function save(Request $request)
    {
        $jogador = Session::get('jogador');

        if($jogador != null){
            $acertos = (int) $request->route('acertos');
            $erros = (int) $request->route('erros');
            $jogador->criarPartida($acertos, $erros);
            return redirect("/partidas");
        }
    }
}
