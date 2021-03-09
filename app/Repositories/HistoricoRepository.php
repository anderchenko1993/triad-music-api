<?php 

namespace App\Repositories;

use App\Models\Historico;
use App\Models\Usuario;

class HistoricoRepository 
{
    public static function historico($request) 
    {
        $usuario = Usuario::where('token', $request->bearerToken())
                    ->get()
                    ->first();

        $historico = Historico::with('artista')
        ->where('usuario', $usuario->id)
        ->orderBy('id', 'desc')
        ->get();

        return $historico;
    }    

    public static function save($request) { 
        $usuario = Usuario::where('token', $request->bearerToken())
                    ->get()
                    ->first();
        
        $historico = new Historico;
        $historico->usuario = $usuario->id;
        $historico->id_artista = $request->id;
        $historico->save();        
    }

}