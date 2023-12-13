<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class SessoesController extends Controller
{
    public function new() {
        return view("sessoes/login");
    }

    public function create(Request $r) {
        $email = $r->email;
        $senha = $r->senha;
        
        $comparacao = Jogador::logar($email, $senha);

        if($comparacao==true){
            return redirect("/partidas");
        }else{
            return redirect("/")->with('mensagem', 'Insira os dados corretamente ou crie uma conta.');;
        }

    }
    public function back(){
        session()->get('jogador')->deslogar();
        return redirect("/");
    }
}
