<?php 
namespace App\Http\Middleware;

use Closure;
use App\Services\AuthService;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');

        if( $request->path() != 'login' ) 
        {            
            if( !$request->bearerToken() || 
                !AuthService::tokenIsValid($request) ) 
            {                
                return response()->json(false);
            }              
        }
        
        if(!$request->isMethod('options')) {
            return $next($request);
        }
    }
}