<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\HistoricoRepository;

class HistoricoController extends Controller 
{
    public function historico(Request $request, $user) 
    {        
        $historico = HistoricoRepository::historico($user);

        return response()->json($historico);
    }
}