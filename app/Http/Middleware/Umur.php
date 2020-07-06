<?php

namespace App\Http\Middleware;

use Closure;

class Umur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $umur){
      echo("<p>UMUR: $umur </p>");
      return $next($request);
    }
}
