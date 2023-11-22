<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;
    protected $fillable = ['id','acertos', 'erros', 'data_atual', 'tempo_atual'];
    
    public function jogador(){
        return $this->belongsTo(Jogador::class);
    }

    //RANKING
    public function mostrarRanking()
    {
        // Conexão com o banco 
        $hostname = 'localhost';
        $username = 'root';
        $password = 'Juvam20041103';
        $database = 'cangaceiros_db';

        $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Select
        $q = $pdo->query("SELECT id, nome, acertos, erros, data_atual, tempo_atual
        FROM jogadores ORDER BY acertos DESC, data_atual DESC, tempo_atual DESC;"); //Essa função query vai receber uma instrução do bd;
        $jogador = $q->fetchAll(); //jogador, o qual será um array, vai receber o valor da query. 

        $partidas = [];

        foreach($jogador as $j){
            $partida = new Partida();
            $partida->setId($j[0]);
            $partida->setAcertos($j[2]);
            $partida->setNome($j[1]);
            $partida->setErros($j[3]);
            $partida->setDataAtual($j[4]);
            $partida->setTempoAtual($j[5]);
            array_push($partidas, $partida);
        }
        return $partidas;
    }
}
