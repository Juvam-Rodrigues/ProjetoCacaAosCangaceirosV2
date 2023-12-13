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
    public static function obterRanking()
    {
        return self::selectRaw('jogador_id, acertos, erros, MAX(data_atual) as ultima_data, MAX(tempo_atual) as ultimo_tempo')
        ->groupBy('jogador_id')
        ->orderByDesc('acertos')
        ->orderByDesc('ultima_data')
        ->orderByDesc('ultimo_tempo')
        ->get();
    }
   
}
