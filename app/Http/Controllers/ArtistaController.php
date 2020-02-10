<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArtistaRepository;
use App\Repositories\HistoricoRepository;

class ArtistaController extends Controller 
{
    public function busca(Request $request) {    
        $busca = [];
        $busca = ArtistaRepository::busca($request);
        HistoricoRepository::save($busca, $request->user);

        return response()->json($busca);
    }

    public function getArtista($id) {        
        $artista = ArtistaRepository::getArtista($id);        

        return response()->json($artista);
    }

}