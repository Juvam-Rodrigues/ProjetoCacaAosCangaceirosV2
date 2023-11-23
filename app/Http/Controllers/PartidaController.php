<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidaController extends Controller
{
    public function exibir(){
        return view("partida/index");
    }
}
