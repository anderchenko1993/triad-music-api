<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\HistoricoRepository;

class HistoricoController extends Controller 
{
    public function historico(Request $request) 
    {        
        $historico = ArtistaRepository::historico($request);

        return response()->json($historico);
    }
}