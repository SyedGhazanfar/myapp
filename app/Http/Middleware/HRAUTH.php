<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HRAUTH
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
        if(session()->has('HR')){
            return $next($request);
            }
            else{
                return redirect('/');
            }
    }
}
