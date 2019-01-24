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

        if (Auth::check() && Auth::user()->role == 9) {
            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 8) {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 7) {
            return redirect('/scout');
        }
        elseif (Auth::check() && Auth::user()->role == 6) {
            return redirect('/team');
        }
        elseif (Auth::check() && Auth::user()->role == 5) {
            return redirect('/academic');
        }
        else {
            return redirect('/login');
        }
    }
}
