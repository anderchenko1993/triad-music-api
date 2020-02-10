<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Log;

class ApiDataLogger
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
        return $next($request);
    }

    public function terminate($request, $response) 
    {
        $log = new Log;        
        $log->full_url =  $request->fullUrl();
        $log->method = $request->method();
        $log->user_agent = $request->userAgent();
        $log->status = $response->status();
        $log->save();
    }
}
