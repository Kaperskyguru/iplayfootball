<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Player
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
        if (Auth::check() && Auth::user()->role == 8) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 9) {
            return redirect('/admin');
        }
        else {
            return redirect('/admin');
        }
    }
}
