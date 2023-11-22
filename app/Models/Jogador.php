<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Jogador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'senha'];
    protected $hidden = ['senha'];

    public static function criarUsuario($nome, $senha, $repetirSenha, $email){
        if($senha == $repetirSenha){
            $e = new Jogador([
                'nome' => $nome, 'senha' => $senha, 'email' => $email
            ]);
            $e->save();
            return $e;
        }
        return null;
    }

    public static function logar($email, $senha){
        $jogador = Jogador::where('email', $email)->first();

        if($jogador != null && Hash::check($senha, $jogador->senha)){ //Check verifica
            session()->put('jogador', $jogador); //Variável de sessão para que ela não seja morta ao apagar a página, para que a aplicação não se esqueça.
            return true;
        }
        return false;
        
    }
    public function deslogar(){
        session()->forget('jogador');
    }

    // DADOS

    public function editarDados($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->save(); //Salva no banco de dados.
    }
    
    //RELACIONAMENTO UM PARA MUITOS
    public function partidas():HasMany{
        return $this->hasMany(Partida::class, 'partidas');
    }

    //PARTIDA
    public function criarPartida($acertos, $erros, $dataAtual, $tempoAtual){   
        $partida = new Partida(['acertos' => $acertos , 'erros' => $erros, 'data_atual' => $dataAtual, 'tempo_atual' => $tempoAtual]);
        $this->partidas()->save($partida);
    }

}
