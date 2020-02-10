<?php 

namespace App\Repositories;

use App\Models\Usuario;

class UsuarioRepository 
{
    public static function getUsuario($request) {
        return Usuario::where('token', $request->bearerToken())
                ->get()
                ->first();
    }

}