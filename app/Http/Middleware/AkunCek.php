<?php

namespace App\Http\Middleware;

use ErrorException;
use Closure;
use Illuminate\Support\Facades\Hash;
use App\Pengguna;

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
      $data = Pengguna::get();
      foreach($data as $dat){
        if($dat->user == $request->user && Hash::check($request->pass, $dat->pass)){
          return $next($request);
        }else{return back()->with("err", "Salah User dan Password");}
      }
      return back()->with("err", "Salah User dan Password");

        // if($request->user == "rudy" && $request->pass == "rudy"){
        //   return $next($request);
        // }
        // else{return redirect("/");}
    }
}
