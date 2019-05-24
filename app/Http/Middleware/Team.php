<?php

namespace Iplayfootball\Http\Middleware;
use Auth;

use Closure;

class Team
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
        else if (Auth::check() && Auth::user()->role == 8) {
            return redirect('/player');
        }
        else if (Auth::check() && Auth::user()->role == 7) {
            return redirect('/scout');
        }
        else if (Auth::check() && Auth::user()->role == 6) {
            return $next($request);
        }
        else if (Auth::check() && Auth::user()->role == 5) {
            return redirect('/academic');
        }
        else {
            return redirect('/login');
        }
    }
}
