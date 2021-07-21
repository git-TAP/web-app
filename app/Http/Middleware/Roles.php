<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Roles
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
        if(auth()->user()->roles == 1){
            return $next($request);
        }else{
            return redirect('home')->with('error', "You don't have admin access.");
        }

        if (auth()->user()->roles == 2) {
            return $next($request);
        }else{

        return redirect('home')->with('error', "You don't have parent access.");
        }
        if (auth()->user()->roles == 0) {
            return $next($request);
        }else{
            return redirect('home')->with('error', "You don't have teacher access.");
        }
        if (auth()->user()->roles == 3) {
            return $next($request);
        } else {
            return redirect('home')->with('error', "You don't have principal access.");
        }

        
    }
}
