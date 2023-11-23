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
   
}
