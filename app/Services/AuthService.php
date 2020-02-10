<?php 

namespace App\Services;

use App\Repositories\UsuarioRepository;

class AuthService {
    public static function tokenIsValid($request) {
        $usuario = UsuarioRepository::getUsuario($request);

        if($usuario) 
            return true;        
        else 
            return false;
    }
}