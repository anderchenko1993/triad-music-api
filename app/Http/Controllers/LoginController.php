<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class LoginController extends Controller 
{
    public function login(Request $request) {        
        // dd($request->all());

        try {
            $usuario = Usuario::where('id_user_google', $request->id)
                        ->get()
                        ->first();

            if($usuario) {
                $usuario = Usuario::where('id_user_google', $request->id)
                ->update(['token'=>$request->token]);
            }
            else {
                $usuario = new Usuario;
                $usuario->id_user_google = $request->id;
                $usuario->name = $request->name;
                $usuario->token = $request->token;
                $usuario->save();                
            }

            return response()->json(true);   
        } catch(Exception $e) {
            return response()->json(false);   
        }
    }
}