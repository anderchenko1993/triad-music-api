<?php 

namespace App\Repositories;

use App\Models\Historico;

class HistoricoRepository 
{
    public static function busca($request) 
    {
        return Historico::where('id_usuario', $request->usuario)->get();
    }    

}