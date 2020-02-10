<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArtistaRepository;

class ArtistaController extends Controller 
{
    public function busca(Request $request) {        
        $busca = ArtistaRepository::busca($request);

        return response()->json($busca);
    }

    public function getArtista($id) {        
        $artista = ArtistaRepository::getArtista($id);        

        return response()->json($artista);
    }

}