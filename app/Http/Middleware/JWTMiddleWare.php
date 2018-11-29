<?php

namespace App\Http\Middleware;


use Tymon\JWTAuth\Facades\JWTAuth;

use Closure;

class JWTMiddleWare
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
        JWTAuth::parseToke()->authenticate();
        return $next($request);
    }
}
