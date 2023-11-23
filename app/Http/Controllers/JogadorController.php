<?php

namespace App\Http\Controllers;

use App\Models\Jogador;
use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function create(Request $request)
    {
        $nome = $request->nome;
        $email = $request->email;
        $senha = $request->senha;
        $confirmacao = $request->confirmacao;

        $novo = Jogador::criarUsuario($nome, $email, $senha, $confirmacao);

        if ($novo == null) {
            return redirect("/registro")->with('msg', 'Dados inseridos incorretamente.');
        } else {
            return redirect("/")->with('msg', 'Conta criada com sucesso, logue normalmente.');
            ;
        }
    }
}
