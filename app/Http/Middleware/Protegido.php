<?php

namespace App\Http\Middleware;

use Closure;

class Protegido
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

        if($request->id != 1){
            return redirect()->route('main');
        }
        return $next($request);
    }
}
