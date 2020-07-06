<?php

namespace App\Http\Middleware;

use Closure;

class AkunCek
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
        if($request->user == "rudy"){
          return $next($request);
        }
        else{return redirect("/");}
    }
}
