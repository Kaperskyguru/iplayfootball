<?php

namespace Iplayfootball\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check() && Auth::user()->role == 9) {
            return redirect('/admin');
        }
        elseif (Auth::check() && Auth::user()->role == 8) {
            return redirect('/player');
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

        return $next($request);
    }
}
