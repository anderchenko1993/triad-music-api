<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\HistoricoRepository;

class HistoricoController extends Controller 
{
    public function historico(Request $request) 
    {        
        $historico = HistoricoRepository::historico($request);

        return response()->json($historico);
    }

    public function save(Request $request) {
        HistoricoRepository::save($request);
    }
}