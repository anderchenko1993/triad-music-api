<?php 

namespace App\Repositories;

use App\Models\Artista;
use App\Models\Genero;

class ArtistaRepository 
{
    public static function busca($request) 
    {
        return Artista::where('nome', 'ILIKE', '%'. $request->artista .'%')->get();
    }    

    public static function getArtista($id) 
    {
        return Artista::with('generos')->with('albuns')->find($id);
    }
}