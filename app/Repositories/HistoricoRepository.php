<?php 

namespace App\Repositories;

use App\Models\Historico;

class HistoricoRepository 
{
    public static function historico($user) 
    {
        return Historico::with('artista')
        ->where('usuario', $user)
        ->get();
    }    

    public static function save($data, $user) {
        foreach($data as $value) {
            $historico = new Historico;
            $historico->usuario = $user;
            $historico->id_artista = $value->id;
            $historico->save();
        }
    }

}