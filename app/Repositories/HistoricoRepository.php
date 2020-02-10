<?php 

namespace App\Repositories;

use App\Models\Historico;

class HistoricoRepository 
{
    public static function historico($request) 
    {
        return Historico::with('artista')
        ->where('usuario', $request->bearerToken())
        ->orderBy('id', 'desc')
        ->get();
    }    

    public static function save($request) {        
        $historico = new Historico;
        $historico->usuario = $request->bearerToken();
        $historico->id_artista = $request->id;
        $historico->save();        
    }

}