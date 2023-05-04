<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EjemploMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {        
        echo "se esta llamando al middleware $role<br>";
        echo "<b>middleware usando rol $role</b>: llamando al middleware<br>";
        return $next($request);
    }
}
