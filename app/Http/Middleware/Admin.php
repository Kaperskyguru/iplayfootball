<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class Admin
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
        if (Auth::check() && Auth::user()->role == 9) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 8) {
            return redirect('/player');
        }
        else {
            return redirect('/admin');
        }
    }
}
