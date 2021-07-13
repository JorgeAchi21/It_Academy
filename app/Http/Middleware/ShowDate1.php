<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowDate1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo "(Middleware-Controller)Php -> Fecha: " . date("d") . " del " . date("m") . " de " . date("Y") . " - Php -> Hora: " . date("H:i:s");;
        //echo "<br>"; 
        echo " //(Middleware-Controller)Laravel helper -> Fecha: " . today() . " - Laravel helper-> Hora: " . now();
        echo "<br>";
        return $next($request);
    }
}
